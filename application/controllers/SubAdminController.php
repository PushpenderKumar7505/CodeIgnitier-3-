<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class SubAdminController extends BaseController {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("SubAdminModel",'subadmin');
        $this->load->model("Customer_model");
        $this->load->library("encryption");
        $this->load->helper("url");
        //ye check krega k session  k andr email aayi ki nhi agr nhi aayi toh siddhe redirect kr dega base url pr
        if ($this->session->userdata("userid") == "") {
            redirect(base_url());
        }
    }


    public function subAdminList()
    {
        $data['record']=$this->subadmin->subAdminList();
        $this->loadViews("subadminlist",$data);
        
    }

    public function subAdminView($id)
    {
        $data['record']=$this->subadmin->subAdminDetails($id);
       // print_r($data['record']);exit;
        $this->loadViews("subadminview",$data); 
    }

    public function emailUpdate()
    {
        $email=$this->input->post('email');
        $id=$this->input->post('id');
        $data=array(
            'email'=>$email
        );

        $this->subadmin->updateEmail($id,$data);
        redirect($_SERVER['HTTP_REFERER']);


    }
    public function passwordUpdate()
    {
        $this->load->library( 'encryption');
        $password=$this->input->post('password');
        $this->encryption->initialize(
            array(
                    'cipher' => 'blowfish',
                    'mode' => 'cbc',
                    'hmac_digest' => 'sha224',
                    'key' => '<a 32-character random string>'
            )
    );
      $userPassword=$this->encryption->encrypt($password);
     // exit;
     //echo $userPassword;exit;
        $id=$this->input->post('id');
        $data=array(
            'password'=>$userPassword
        );

        $this->subadmin->passwordUpdate($id,$data);
        redirect($_SERVER['HTTP_REFERER']);


    }
    public function deleteSubAdmin($id)
    {
        $this->subadmin->deleteSubAdmin($id);
        redirect('subadminUsers');
    }
}