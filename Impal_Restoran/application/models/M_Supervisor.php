<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Supervisor extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_Supervisor($data){
        $this->db->insert('supervisor',$data);   
    }

    public function get_Karyawan($id_karyawan){
        $this->db->where('id_karyawan',$id_karyawan);
        $query= $this->db->get('karyawan');
        return $query->result_array();
    }
    public function getNamaSupervisor($id_karyawan){
        $query=$this->db->query("select nama_supervisor from supervisor where id_karyawan='".$id_karyawan."'");
		return $query->result();
    }
}