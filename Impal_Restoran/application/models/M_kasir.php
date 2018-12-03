<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kasir extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function add_kasir($data){
        $this->db->insert('kasir',$data); 

    }

    public function getNamakasir($id_karyawan){
        $query=$this->db->query("select nama_kasir from kasir where id_karyawan='".$id_karyawan."'");
		return $query->result();
    }
}