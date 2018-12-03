<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CGaji extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->model('M_Karyawan');


    }
    public function index(){
        $this->load->view('inputGaji');
    }

    public function caridatagaji(){
        $id_karyawan = $this->input->post('id_karyawan');
        $hasil = $this->M_Karyawan->getJabatan($id_karyawan);
            $jabatan;
            foreach($hasil as $row){
                $jabatan=$row->jabatan;
            }
            if($jabatan == "kasir"){
                $query = $this->M_kasir->getNamakasir($id_karyawan);
                $nama_karyawan;
                foreach($hasil as $row){
                    $nama_karyawan=$row->jabatan;
                }
            } else if ($jabatan == "supervisor"){
                $query = $this->M_Supervisor->getNamaSupervisor($id_karyawan);
                $nama_karyawan;
                foreach($hasil as $row){
                    $nama_karyawan=$row->jabatan;
                }
            } else if ($jabatan == "pelayan"){
                $query = $this->M_Supervisor->getNamapelayan($id_karyawan);
                $nama_karyawan;
                foreach($hasil as $row){
                    $nama_karyawan=$row->jabatan;
                }
            }
        redirect('/CGaji/'.$id_karyawan.'/'.$nama_karyawan.'/','refresh');

        }
    

    public function InsertGaji(){
        
        
    }
}