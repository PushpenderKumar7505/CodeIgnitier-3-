<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class UserController extends BaseController {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model("Customer_model");
        $this->load->library("encryption");
        $this->load->helper("url");
        //ye check krega k session  k andr email aayi ki nhi agr nhi aayi toh siddhe redirect kr dega base url pr
        if ($this->session->userdata("userid") == "") {
            redirect(base_url());
        }
    }
    public function index()
    {
        $this->loadViews("loginpage");
    }
    public function customerList()
    {
        $this->loadViews("customer_list");
    }
    public function hotessList()
    {
        $this->loadViews("hostess_list");
    }
    public function dashboard()
    {
        $this->loadViews("dashboard");
    }
    public function coustomerView($id)
    {
       // echo $id;
       $data['user']=$this->Customer_model->customerDetails($id);
      // echo $data['user']->phone;exit;
       $data['login']=$this->Customer_model->customerLogin($data['user']->phone);
       $data['payment']=$this->Customer_model->customerPayment($id);
      //print_r($data['payment']);exit;
        $this->loadViews("coustomer_view",$data);
    }
    public function agentList()
    {
        $this->loadViews("agent");
    }
    public function roleList()
    {
        $this->loadViews("rolelist");
    }
    public function viewRole()
    {
        $this->loadViews("view_role");
    }
    public function userList()
    {
        $this->loadViews("userlist");
        
    }
    public function userView()
    {
        $this->loadViews("userview");
    }
    public function setting()
    {
        $this->loadViews("setting");
    }
    public function viewUserEdit()
    {
        $this->loadViews("viewuseredit");
    }
    public function fileManagerFolder()
    {
        $this->loadViews("folderSettingPage");
    }
    public function projectViewPage()
    {
        $this->loadViews("project");
    }
    public function subscription()
    {
        $this->loadViews("subscription_List");
    }
    public function subAdd()
    {
        $this->loadViews("subscription_add");
    }
    public function subView()
    {
        $this->loadViews("sub_view");
    }
    public function loginPage()
    {
        $this->User_model("login");
        $this->loadViews("login_page");
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
            $this->session->set_flashdata(
                "message",
                "your email and password is "
            );
            redirect($_SERVER["HTTP_REFERER"]);
            //echo "your email and password is incorrect ";
        } else {
            $this->session->set_userdata("email", $data[0]->Email); // for fetching the particular field in the array($data)
            $this->session->set_userdata("name", $data[0]->Name); //for fetching the particular field in the array($data)
            redirect("dashboard");
        }
    }
    public function userDetail()
    {
        // $this->loadViews("userlist");
        $data['record']=$this->User_model->getUserData();
        // print_r($data);exit;
        $this->loadViews("userlist",$data);
    }
    public function deleteUserData($id) 
    {
        // $id = $this->input->post('package_id');
        // if ($id) {
        //     $this->Package_model->deleteRow($id);
        if( $this->User_model->deleteUser($id))
        {
            redirect($_SERVER['HTTP_REFERER']);  
        } 
        else 
        {
            show_404();
        }
    }

}
