<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Pesanan extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_memesan($data){
        $this->db->insert('memesan',$data); 
    
    }
    public function add_order($data){
        $this->db->insert('order',$data);
    }
    public function edit_pesanan($data,$nama_customer){
        $this->db->update('memesan', $data, array('id_menu' => $id_menu));
    }

}