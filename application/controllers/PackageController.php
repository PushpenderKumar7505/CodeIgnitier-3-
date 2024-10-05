<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (!defined('BASEPATH'))
exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class PackageController extends BaseController {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Package_model");
        $this->load->library("encryption");
        $this->load->helper("url");
        //ye check krega k session  k andr email aayi ki nhi agr nhi aayi toh siddhe redirect kr dega base url pr
        if ($this->session->userdata("userid") == "") {
            redirect(base_url());
        }
    }
    // only display the data from the database in the page
    public function packageList()
    {
        $data['record']=$this->Package_model->getData();
       // print_r($data);exit;
       $this->loadViews("package",$data);
        
    }
    public function editPackageList($id)
    {
       $data['record']= $this->Package_model->userDetails($id);
       $this->loadViews("edit_subscription",$data);
    }
    public function insertPackageData() {
        $PACKAGE_NAME = $this->input->post('package_name');
        $CREATED = $this->input->post('created');
        $PACKAGE_TYPE = $this->input->post('package_type');
        $PACKAGE_AMOUNT = $this->input->post('amount');
        $coins = $this->input->post('coins');
        $id = $this->input->post('id');
       //print_r($_POST);exit;
       //echo $id;exit;
        if(empty($id))
        {    
            $data = array(
                'package_name' => $PACKAGE_NAME,
                'created' => date('y/m/d H:i:s'),
                // 'created' => $CREATED,
                'package_type' => $PACKAGE_TYPE,
                'amount' => $PACKAGE_AMOUNT,
                'coins_value'=>$coins,
                'package_status'=>'ACTIVE',
                
            );
            $result = $this->Package_model->insertData($data);
            // $this->session->set_flashdata('message','Data Insert successfully!');
            // redirect($_SERVER['HTTP_REFERER']);
            redirect('package');
        }
        else
        {
            //echo "hello";exit;
            $data = array(
                'package_name' => $PACKAGE_NAME,
                'created' => date('y/m/d H:i:s'),
                // 'created' => $CREATED,
                'package_type' => $PACKAGE_TYPE,
                'amount' => $PACKAGE_AMOUNT,
                'coins_value'=>$coins,
                'package_status'=>'ACTIVE',
                
            );
            $this->Package_model->editPackageData($data, $id);
            // redirect($_SERVER['HTTP_REFERER']);
            $this->session->set_flashdata('message','Data Update successfully!');
            redirect('package');
        } 
    }    

    public function deletePackage($id) 
    {
        // $id = $this->input->post('package_id');
        // if ($id) {
        //     $this->Package_model->deleteRow($id);
        if( $this->Package_model->deleteRow($id))
        {
            redirect($_SERVER['HTTP_REFERER']);  
        } 
        else 
        {
            show_404();
        }
    }

    public function viewPackageTable()
    { 
        $data['record'] = $this->Package_model->userData();
        $this->loadViews("sub_view",$data);
        //echo "<pre>";print_r($data);
    }

    public function updatePackage()
    {
        $id=$this->input->post('id');
        $record=$this->Package_model->updatePackage($id);
       echo json_encode($record);
    }
    public function viewPackageData($id)
    {
        // echo $id;exit;
        // $id='package_id';
        $data['record'] = $this->Package_model->packageViewData($id);
        $data['record2'] = $this->Package_model->userData($id);
        // print_r($data);exit;
        $this->loadViews("sub_view",$data);
    }
    
}

