<?php
class Customer_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function customerData()
    {
        $record = $this->db->select('user_id,name, phone, email, wallet_amount,  status,created,modified_dt')
            ->from('user')
            ->where('user_type', 'CUSTOMERS')
            ->get()
            ->result_array();
        return $record;
    }

    public function customerDetails($id)
    {
        $record = $this->db->select('*')
            ->from('user')
            ->where('user_id', $id)
            ->get()
            ->row();
        return $record;
    }
    public function customerPayment($id)
    {
        $this->db->select('*');
            $this->db->from('transaction');
            $this->db->where('user_id', $id);
          $this->db->where('txn_type', 'PG_ADD_CASH');
           $this->db->or_where('txn_type', 'LOAN_AMOUNT');
           
             $record = $this->db->get()->result_array();
            
           // PRINT_R($record);EXIT;
          // echo $this->db->last_query();EXIT;
        return $record;
    }
    public function customerLogin($phone)
    {
        $record = $this->db->select('*')
            ->from('verify_otp')
            ->where('phone', $phone)
            ->get()
            ->result_array();
        return $record;
    }
}