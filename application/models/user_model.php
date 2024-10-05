<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Load database library
        $this->load->library("encryption");
        $this->load->database();
    }
    // it is used to select the data from the database  and store  in the result variable and the data is goes in the $r variable and return it.
    public function login($EMAIL, $PASSWORD)
    {
        $r = $this->db->select("*")
            ->from(" tbl_users")
            ->where("email", $EMAIL)
            ->get()
            ->result_array();
        // echo $PASSWORD;exit;
       // print_r($r);exit;
        if (!empty($r))
        {
            if (password_verify($PASSWORD, $r[0]["password"])) {
                // it check the password which comes form the database and matches the user which can enter on the password field
                return $r;
            } else {
                return array (); //it is the blank array.
            }
           // echo "hello";exit;
        } else 
        {
            return array ();
        }
    }
    public function getUserData()
    {
        $record = $this->db->select('*')->from('user')->get()->result_array();
        return $record;
    }
    public function deleteUser($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
        return true;
    }
}
