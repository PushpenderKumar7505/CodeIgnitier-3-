<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class AgentController extends BaseController
{
  public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Agent_model');
        if ($this->session->userdata("userid") == "") {
          redirect(base_url());
      }
    }
    public function agentDetails()
    {
      $data['record']=$this->Agent_model->agentData();
      $this->loadViews("agent",$data);
     
  }
  public function deleteAgentdata($id) 
  {
      if( $this->Agent_model->deleteAgentId($id))
      {
          redirect($_SERVER['HTTP_REFERER']);  
      } 
      else 
      {
          show_404();
      }
  }
}
  
