<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class HostessController extends BaseController
{
  public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Hostess_model');
        if ($this->session->userdata("userid") == "") {
          redirect(base_url());
      }
    }
    public function hostessDetails()
    {
      $data['record']=$this->Hostess_model->hostessData();
      $this->loadViews("hostess_view",$data);
     
  }
  public function deleteHostessdata($id) 
  {
      if( $this->Hostess_model->deleteHostessId($id))
      {
          redirect($_SERVER['HTTP_REFERER']);  
      } 
      else 
      {
          show_404();
      }
  }

  public function hostestView($id)
  {
     // echo $id;
     $data['user']=$this->Hostess_model->hostestDetails($id);
    // echo $data['user']->phone;exit;
     $data['login']=$this->Hostess_model->hostestLogin($data['user']->phone);
     $data['payment']=$this->Hostess_model->hostestPayment($id);
    //print_r($data['payment']);exit;
      $this->loadViews("hostest_details",$data);
  }

  public function hostessBill($id)
  {
    $data['user']=$this->Hostess_model->hostestDetails($id);
    // echo $data['user']->phone;exit;
     $data['login']=$this->Hostess_model->hostestLogin($data['user']->phone);
     $data['payment']=$this->Hostess_model->hostestWithdrawRequest($id);
     $data['bank']=$this->Hostess_model->hostestBankDetails($id);
    // print_r($data);exit;
    //echo "hello";exit;
    $this->loadViews("hostess_billing",$data);
  }
  public function hostessLogs($id)
  {
    //echo "hello";exit;
    $data['user']=$this->Hostess_model->hostestDetails($id);
    // echo $data['user']->phone;exit;
     $data['login']=$this->Hostess_model->hostestLogin($data['user']->phone);
     $data['payment']=$this->Hostess_model->hostestPayment($id);
    
    $this->loadViews("hostesslogs",$data);
  }
  public function hostessStatement($id)
  {
    $data['user']=$this->Hostess_model->hostestDetails($id);
    // echo $data['user']->phone;exit;
     $data['login']=$this->Hostess_model->hostestLogin($data['user']->phone);
     $data['payment']=$this->Hostess_model->hostestPayment($id);
    $this->loadViews("statement",$data);
  }
  public function referralHostess($id)
  {
    $data['user']=$this->Hostess_model->hostestDetails($id);
    // echo $data['user']->phone;exit;
     //$data['login']=$this->Hostess_model->hostestLogin($data['user']->phone);
     $data['referral']=$this->Hostess_model->hostestRefferal($data['user']->referral_code);
     $data['payment']=$this->Hostess_model->hostestPayment($id);
    $this->loadViews("referrals",$data);
  }

  public function bankDetails()
  {
    $id=$this->input->post('id');
    $data=$this->Hostess_model->hostestBankDetails2($id);
    echo json_encode($data);
  }

  public function bankDetailsUser()
  {
    $id=$this->input->post('bankid');
    $bank_name=$this->input->post('bank_name');
    $acc_no=$this->input->post('acc_no');
    $ifsc_code=$this->input->post('ifsc_code');
    //$bank_img=$this->input->post('bank_img');
    $server_type='';
    $photo='';
    if(!empty($_FILES['bank_img']['name'])){
      if ($server_type == 'AWS') {
          $filename = $_FILES['bank_img'];
          $foldername = 'bank_image';
          $photo = $this->file_upload_function($filename, $foldername);
      } else {
          $filename =$_FILES['bank_img'];
          $foldername = 'bank_image';
          $photo = $this->file_upload_function($filename, $foldername);
      }
          }
          $datails=array(
            'bank_name'=>$bank_name,
            'account_no'=>$acc_no,
            'ifsc_code'=>$ifsc_code,
            'bank_photo'=>$photo
          );

          $this->Hostess_model->hostestBankDetailsInsert($id,$datails);
          redirect($_SERVER['HTTP_REFERER']);  
   
  }
}
  
