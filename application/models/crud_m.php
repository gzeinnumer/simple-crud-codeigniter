<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class crud_m extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function read(){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->order_by("id","desc");
        $query = $this->db->get();
        return $query->result();

        // $sql = "select * from users order by id desc;";
        // $query = $this->db->query($sql);
        // return $query->get()->result_array();
    }

    public function add($data){
        $this->db->insert('users', $data);
    }

    public function read_data_by_id($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row(); 
     }
     
    public function edit($data){
            $this->db->where('id', $data['id']);
            $this->db->update('users',$data);     
    }

    public function delete($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('users', $data);
    }

}
