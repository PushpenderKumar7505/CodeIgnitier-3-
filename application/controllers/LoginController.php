<?php
defined("BASEPATH") or exit("No direct script access allowed");
require APPPATH . '/libraries/BaseController.php';
class LoginController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library("encryption");
        $this->load->library("session");
        $this->load->helper("url");
    }

    public function index()
    {
        //$this->lo("login_page");
        $this->load->view('login_page');
        // $this->load->view("login_page");
    }

    public function loginFormDataMatch()
    {
        // it is used to get the data from the table
        // print_r($_POST);exit;
        $EMAIL = $this->input->post("email"); // it is used to get the value of the Email from the form or ek trh se input lene k tarika
        $PASSWORD = $this->input->post("password"); // it is used to get the value password from the form
        $data = $this->User_model->login($EMAIL, $PASSWORD);
        // echo "<pre>" ;print_r($data);exit;
        if (empty($data)) {
            //check if $data is empty or not because $data is in  the form of array
            $this->session->set_flashdata("message", "Invalid Credential!");
            redirect($_SERVER["HTTP_REFERER"]);
        } else {
            // echo($data[0]['email']);exit;
            $this->session->set_userdata("email", $data[0]["email"]); // for fetching the particular field in the array($data) or dusre trike se baatayein toh hm email ko match krva kr set kr rhe h ki ye email address h 
            $this->session->set_userdata("userid", $data[0]["userId"]); //for fetching the particular field in the array($data)
            $this->session->set_userdata("name", $data[0]["name"]); //for fetching the particular field in the array($data)
            redirect("dashboard");
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect("login_page"); // isse vapas login page pr chle jaae aur jo login h ye route bnaai  h hmne
    }
    public function profile(){
        $this->loadViews("profile");
    
    }
    public function profile_setting(){
        $this->loadViews("profile_setting");
       
    }
    public function profile_security(){
        $this->loadViews("profile_security");
       
    }
}
