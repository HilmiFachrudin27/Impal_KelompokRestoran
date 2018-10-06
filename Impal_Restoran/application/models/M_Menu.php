<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Menu extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_Menu($data){
        $this->db->insert('menu',$data);
    }

    public function edit_Menu($data, $id_menu){
        $this->db->update('menu', $data, array('id_menu' => $id_menu));
    }

    public function get_menu($nama_menu){
        $this->db->where('menu',$username);
        $query= $this->db->get('user');
        return $query->result_array();

    }
    public function show_menu(){
        $query = $this->db->get('menu');
        return $query->result(); 
    }
}
?>