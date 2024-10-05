<?php
class Hostess_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function hostessData()
    {
        $record = $this->db->select('user_id,name,phone, email,wallet_amount,status, created,modified_dt')->from('user')->where('user_type', 'HOSTESS')->get()->result_array();
        return $record;
    }
    public function deleteHostessId($id) {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
        return true;
    }

    
    public function hostestDetails($id)
    {
        $record = $this->db->select('*')
            ->from('user')
            ->where('user_id', $id)
            ->get()
            ->row();
        return $record;
    }
    public function hostestPayment($id)
    {
        $record = $this->db->select('*')
            ->from('transaction')
            ->where('user_id', $id)
            ->get()
            ->result_array();
        return $record;
    }
    public function hostestWithdrawRequest($id)
    {
        $record = $this->db->select('*')
            ->from('withdraw_request')
            ->where('user_id', $id)
            ->get()
            ->result_array();
        return $record;
    }
    public function hostestBankDetails($id)
    {
        $record = $this->db->select('*')
            ->from('bank_details')
            ->where('user_id', $id)
            ->get()
            ->row();
        return $record;
    }
    public function hostestBankDetails2($id)
    {
        $record = $this->db->select('*')
            ->from('bank_details')
            ->where('bank_detail_id ', $id)
            ->get()
            ->row();
        return $record;
    }
    public function hostestLogin($phone)
    {
        $record = $this->db->select('*')
            ->from('verify_otp')
            ->where('phone', $phone)
            ->get()
            ->result_array();
        return $record;
    }

    public function hostestRefferal($ref)
    {
        $record = $this->db->select('*')
            ->from('user')
            ->where('referred_by', $ref)
            ->get()
            ->result_array();
        return $record;
    }
    public function hostestBankDetailsInsert($id,$data)
    {
       $this->db->where('bank_detail_id',$id);
       $this->db->update('bank_details',$data);
       return true;
    }
   
}