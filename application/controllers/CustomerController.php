<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class CustomerController extends BaseController
{
  public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Customer_model');
        if ($this->session->userdata("userid") == "") {
            redirect(base_url());
        }
    }
    public function customerDetails()
    {
        $data['record']=$this->Customer_model->customerData();
        $this->loadViews("customer_detail_list",$data);
        
    }
}

