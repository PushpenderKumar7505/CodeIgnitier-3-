<?php
class Setting_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function settingData()
    {
        $record = $this->db->select('*')
            ->from('settings')
            ->get()
            ->result_array();
        return $record;
    }
    public function insertData($data) 
    {
        return $this->db->insert('settings', $data);
    }
    // public function get_by_id($id) {
    //     return $this->db->get_where('user', array('id' => $id))->row();
    // }

    public function updateSettingData($id, $data) {
        $this->db->where('user_id', $id);
        return $this->db->update('settings', $data);
    }
    // public function getSettingData(){
    // //     $record = $this->db->select('*')
    // //     ->from('setting')
    // //     ->where('id', $id)
    // //     ->get()
    // //     ->row();
    // // return $record;
    // // }


}