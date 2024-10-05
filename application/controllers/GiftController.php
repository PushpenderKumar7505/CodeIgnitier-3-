<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class GiftController extends  BaseController
{
  public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Gift_model');
        if ($this->session->userdata("userid") == "") {
            redirect(base_url());
        }
    }
    public function giftDetails()
    {
     
        $data['record']=$this->Gift_model->giftData();
        $this->loadViews("gift_list",$data);
       
    }
    public function giftAddForm()
    {
        $data['record']=$this->Gift_model->giftData();
        $this->loadViews("gift_add_form");
       
    }
    public function deleteGiftdata($id) 
    {
        if( $this->Gift_model->deleteGiftId($id))
        {
            redirect($_SERVER['HTTP_REFERER']);  
        } 
        else 
        {
            // echo "your data is not deleted";
            show_404();
        }
    }
    public function insertGiftData(){
        $GIFT_VALUE = $this->input->post('gift_value');
        $GIFT_PRICE = $this->input->post('gift_price');
        $GIFT_ICON = $this->input->post('gift_icon');
        $id = $this->input->post('id');
       // echo $id;exit;
        //print_r($_FILES['gift_icon']['name']);exit;
        if(!empty($_FILES['gift_icon']['name'])){
            // $servertype = $this->get_settings_data();
            // foreach ($servertype as $val) {
            //     $settingsInfo[$val->typ] = $val->val;
            // }
            // $bucket_info = $settingsInfo;
            // $server_type = $bucket_info['ServerType'];
            if ($server_type == 'AWS') {
                $filename = $_FILES['gift_icon'];
                $foldername = 'gift_icon';
                $photo = $this->file_upload_function($filename, $foldername);
            } else {
                $filename =$_FILES['gift_icon'];
                $foldername = 'gift_icon';
                $photo = $this->file_upload_function($filename, $foldername);
            }
                }
       //print_r($_POST);exit;
       //echo $id;exit;
        if(empty($id))
        {    
            $data = array(
                'gift_value' => $GIFT_VALUE,
                'gift_price' => $GIFT_PRICE,
                'gift_icon' => $photo,
                
                
            );
            $result = $this->Gift_model->giftInsertData($data);
            $this->session->set_flashdata('message','Data Insert successfully!');
            // redirect($_SERVER['HTTP_REFERER']);
            redirect('giftDetails');
        }
        else
        {
            $data = array(
                'gift_value' => $GIFT_VALUE,
                'gift_price' => $GIFT_PRICE,
                'gift_icon' => $photo,
                
                
            );
            $result = $this->Gift_model->editGiftData($data,$id);
            // redirect($_SERVER['HTTP_REFERER']);
            $this->session->set_flashdata('message','Data Update successfully!');
            redirect('giftDetails');
        } 
    }
    public function editGiftList($id)
    {
       $data['record']= $this->Gift_model->editGiftDetails($id);
       $this->loadViews("gift_edit_form",$data);
   
    }
    public function updateGift()
    {
        $id=$this->input->post('id');
        $record=$this->Gift_model->updateGift($id);
       echo json_encode($record);
    }
    
}

