<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Transaksi extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_Karyawan($data){
        $this->db->insert('memesan',$data);   
    }

    public function get_Karyawan($id_karyawan){
        $this->db->where('id_karyawan',$id_karyawan);
        $query= $this->db->get('karyawan');
        return $query->result_array();
    }

    public function login($id_karyawan,$password){
        // $query= $this->db->query("select count(*) as exist from user "."where id_karyawan='$id_karyawan' and password='$password'"); 
        // return $query->row_array();
        $this->db->where('id_karyawan',$id_karyawan);
        $this->db->where('password',$password);
        $query = $this->db->get('karyawan');
        return $query->result_array();
    }

    public function getGaji_bulan(){
        $this->db->where('id_karyawan',$id_karyawan);
        $this->db->where('bulan',$bulan);
        $query = $this->db->get('gaji');
        return $query->result_array();
    }


}