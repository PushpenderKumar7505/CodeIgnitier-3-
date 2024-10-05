<?php
class Agent_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function agentData()
    {
        $record = $this->db->select('user_id,name, phone,email, wallet_amount,status,created,modified_dt')
            ->from('user')
            ->where('user_type', 'AGENTS')
            ->get()
            ->result_array();
        return $record;
        // $record = $this->db->select('id,r_id,name,team_name, email,password,wallet_amount,created,address')->from('user')->where("user_type",$AGENTS)->get()->result_array();
        // return $record;
    }
    public function deleteAgentId($id) {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
        return true;
    }
   
}