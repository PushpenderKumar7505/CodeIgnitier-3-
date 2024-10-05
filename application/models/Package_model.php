<?php
class Package_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getData()
    {
        $record = $this->db->select('*')
        ->from('packages')
        ->get()
        ->result_array();
         return $record;
    }
    public function insertData($data) 
    {
        return $this->db->insert('packages', $data);
    }
    public function editPackageData($data,$id)
    {
        //print_r($data);exit;
        $this->db->where('package_id', $id);
        $this->db->update('packages', $data);
        return true;
    } 
    
    public function userDetails($id)
    {
        $record = $this->db->select('*')->from('packages')->where('package_id',$id)->get()->result();
        return $record;
    }
    public function userData($id)
    {
        $this->db->select('*');
        $this->db->from('package_history');
        $this->db->join('packages','package_history.package_id = packages.package_id','left');
        $this->db->join('user','package_history.user_id = user.user_id','left');
        $this->db->where('packages.package_id',$id);

        $record =  $this->db->get()->result_array();
        return $record;
    }
    public function deleteRow($id)
    {
        $this->db->where('package_id', $id);
        $this->db->delete('packages');
        return true;
    }

    public function updatePackage($id)
    {
        $record = $this->db->select('*')->from('packages')->where('package_id',$id)->get()->row();
        return $record;
    }
    public function packageViewData($id)
    {
        $record = $this->db
            ->from('packages')
            ->where('package_id', $id)
            ->get()
            ->row();
        return $record;

    }
   

}

