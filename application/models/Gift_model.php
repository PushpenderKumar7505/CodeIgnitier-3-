<?php
class Gift_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function giftData()
    {
        $record = $this->db->select('*')->from('gift_item')->get()->result_array();
        return $record;
    }
    public function deleteGiftId($id) {
        $this->db->where('gift_id', $id);
        $this->db->delete('gift_item');
        return true;
    }
    public function giftInsertData($data) 
    {
        return $this->db->insert('gift_item', $data);
    }
    public function editGiftDetails($id)
    {
        $record = $this->db->select('*')->from('gift_item')->where('gift_id',$id)->get()->result();
        return $record;
    }
    public function editGiftData($data,$id)
    {
        //print_r($data);exit;
        $this->db->where('gift_id', $id);
        $this->db->update('gift_item', $data);
        return true;
    } 
    public function updateGift($id)
    {
        $record = $this->db->select('*')->from('gift_item')->where('gift_id',$id)->get()->row();
        return $record;
    }
   
}