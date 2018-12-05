<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUnitTestPelayan extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->library("unit_test");
        $this->load->model('M_Pelayan');
		$this->Test();
    }
    public function index(){
        echo "Test Unit";
    }
    public function getNama(){
        $id_karyawan = "pl01";
       $query=$this->M_Pelayan->getNamapelayan($id_karyawan);
        $nama_karyawan;
        foreach ($query as $key){
            $nama_karyawan=$key->nama_karyawan;
        }
        return $nama_karyawan;
    }


    public function TestGetNama(){
        $nama = $this->getNama();
        $test_name = 'Cek Type Nama';
        echo $this->unit->run($nama, 'is_string', $test_name);
    }
    
}
	