<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class SettingController extends BaseController
{
     public function __construct()
    {
      parent::__construct(); 
      $this->load->model("Setting_model");
        if ($this->session->userdata("userid") == "") {
        redirect(base_url());
      }
    }
    public function settingList()
    {
      $this->loadViews("setting_view");  
    }
  
    // public function settingView($id)
    // {
    //    // echo $id;
    //    $data['user']=$this->Hostess_model->hostestDetails($id);
    //   // echo $data['user']->phone;exit;
    //    $data['login']=$this->Hostess_model->hostestLogin($data['user']->phone);
    //    $data['payment']=$this->Hostess_model->hostestPayment($id);
    //   //print_r($data['payment']);exit;
    //     $this->loadViews("hostest_details",$data);
    // }

  
// public function updateSettingData($id) {
//   // Load the model
//   $this->load->model('Setting_model');

//   // Fetch existing data
//   $data['item'] = $this->Setting_model->get_by_id($id);

//   // Load form helper and validation library
//   $this->load->helper('form');
//   $this->load->library('form_validation');

//   // Set validation rules
//   $this->form_validation->set_rules('field_name', 'Field Label', 'required');

//   if ($this->form_validation->run() == FALSE) {
//       // Load the view with the form
//       // $this->load->view('your_view', $data);
//       $this->loadViews("setting_view", $data); 
//   } else {
//       // Prepare data for update
//       $update_data = array(
//           'field_name' => $this->input->post('field_name'),
//           // Add other fields as necessary
//       );

//       // Update the record in the database
//       $this->Setting_model->updatedata($id, $update_data);

//       // Redirect or load a success view
//       redirect('settingList');
//   }
// }


  // public function appFormSubmitData()
  // {
  //   // print_r($_POST);exit;

  //       $APP_NAME = $this->input->post('app_name'); // used to get the data from the table student_details or ek trh se input lene k tarika bss hmne isse ek alg naam ke variable meini store krva diya h
  //       $WEBSITE = $this->input->post('website_url');
  //       $EMAIL_ID = $this->input->post('support_email_id');
  //       $PHONE_NO = $this->input->post('support_phone_no');
  //       $APP_URL = $this->input->post('android_app_url');
  //       $IOS_URL = $this->input->post('ios_app_url');


  //   if (!empty($_POST['id'])) // it is used to check the id we can take is empty or not .
  //   {
  //       // make the array of the particular field and one side gave the field name of the table and another side we gave the name we create where the value of the particular field is come
  //       $form_data = array(
  //           'app_name' => $APP_NAME,
  //           'website_url' => $WEBSITE,
  //           'support_email_id' => $EMAIL_ID,
  //           'support_phone_no' => $PHONE_NO,    
  //           'android_app_url' => $APP_URL,
  //           'ios_app_url' => $IOS_URL,

  //       );
  //       // print_r($form_data);// it will print all the data in the form of array
        
  //       // $this->Setting_model->settingData($form_data);
  //       // $this->Setting_model->settingData($form_data, $_POST['id']);
  //       redirect('settingList');
  //     }
  //   }

  public function appFormSubmitData()
{
    // Retrieve input data
    $APP_NAME = $this->input->post('app_name');
    $WEBSITE = $this->input->post('website_url');
    $EMAIL_ID = $this->input->post('support_email_id');
    $PHONE_NO = $this->input->post('support_phone_no');
    $APP_URL = $this->input->post('android_app_url');
    $IOS_URL = $this->input->post('ios_app_url');

    // Check if ID is provided for updating
    $id = $this->input->post('id');
    $form_data = array(
        'app_name' => $APP_NAME,
        'website_url' => $WEBSITE,
        'support_email_id' => $EMAIL_ID,
        'support_phone_no' => $PHONE_NO,
        'android_app_url' => $APP_URL,
        'ios_app_url' => $IOS_URL,
    );

    // Perform insert or update based on whether ID is present
    if (!empty($id)) {
        // Update existing record
        if ($this->Setting_model->updateSettingData($form_data, $id)) {
            $this->session->set_flashdata('success', 'Data updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to update data.');
        }
    } else {
        // Insert new record
        if ($this->Setting_model->insertData($form_data)) {
            $this->session->set_flashdata('success', 'Data submitted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to submit data.');
        }
    }
    redirect('settingList');
// }
    // Perform insert or update based on whether ID is present
    // if (!empty($id)) {
    //     // Update existing record
    //     if ($this->Setting_model->updateSettingData($form_data, $id)) {
    //         $this->session->set_flashdata('success', 'Data updated successfully.');
    //     } else {
    //         $this->session->set_flashdata('error', 'Failed to update data.');
    //     }
    // } else {
    //     // Insert new record
    //     if ($this->Setting_model->insertData($form_data)) {
    //         $this->session->set_flashdata('success', 'Data submitted successfully.');
    //     } else {
    //         $this->session->set_flashdata('error', 'Failed to submit data.');
    //     }
    // }

    // redirect('');
}

// public function data(){
//   $data['record']=$this->Setting_model->settingData();
//   // print_r($data);exit; 
//   $this->loadViews("setting_view",$data);
// }
}