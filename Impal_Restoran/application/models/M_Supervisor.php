<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Supervisor extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_Supervisor($data){
        $this->db->insert('laporan',$data);   
    }

    public function get_Karyawan($id_karyawan){
        $this->db->where('id_karyawan',$id_karyawan);
        $query= $this->db->get('karyawan');
        return $query->result_array();
    }
}