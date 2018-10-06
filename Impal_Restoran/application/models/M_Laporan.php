<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Laporan extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_laporan($data){
        $this->db->insert('laporan',$data); 
    
    }
    
    public function edit_laporan($data,$id_laporan){
        $this->db->update('laporan', $data, array('id_laporan' => $id_laporan));
    }

}