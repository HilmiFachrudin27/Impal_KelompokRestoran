<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Pelayan extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getNamapelayan($id_karyawan){
        $query=$this->db->query("select nama_karyawan from pelayan where id_karyawan='".$id_karyawan."'");
		return $query->result();
    }

}
?>