<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_customer extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_customer($data){
        $this->db->insert('customer',$data); 
    
    }
    public function edit_customer($data,$no_meja){
        $this->db->update('customer', $data, array('no_meja' => $no_meja));
    }
    public function delete_customer($no_meja){
        $this->db->where('no_meja',$no_meja); 
        $this->db->delete('customer'); 
    }
}
?>