<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Transaksi extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function Login_Suplier($id_suplier,$password){
        $query= $this->db->query("select count(*) as exist from user "."where id_karyawan='$id_karyawan' and password='$password'"); 
        return $query->row_array();
    }
}