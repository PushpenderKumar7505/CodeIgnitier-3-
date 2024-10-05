<?php
class SubAdminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    function subAdminList()
    {
        $this->db->select('*');
        $this->db->join('tbl_roles','tbl_roles.roleId=tbl_users.roleId','left');
        $data=$this->db->from('tbl_users')->get()->result_array();
        return $data;
    }

    function subAdminDetails($id)
    {
        $this->db->select('*');
        $this->db->join('tbl_roles','tbl_roles.roleId=tbl_users.roleId','left');
        $data=$this->db->from('tbl_users')->where('userId',$id)->get()->row();
        return $data;
    }

    function updateEmail($id,$data)
    {
       $this->db->where('userId',$id);
        $this->db->update('tbl_users',$data);
        return true;
    }
    function passwordUpdate($id,$data)
    {
       $this->db->where('userId',$id);
        $this->db->update('tbl_users',$data);
        return true;
    }


    function deleteSubAdmin($id)
    {
        $this->db->where('userId',$id);
        $this->db->delete('tbl_users');
        return true;
    }

}