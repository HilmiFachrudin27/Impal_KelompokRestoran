<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CSearchGaji extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->model('M_Karyawan');
        $this->load->model('M_kasir');
        $this->load->model('M_Pelayan');
        $this->load->model('M_Supervisor');

    }
    public function index(){
        $this->load->view('SearchGaji');
    }

    public function caridatagaji(){
        $id_karyawan = $this->input->post('id_karyawan');
        // $data['karyawan'] = $this->M_Karyawan->get_Karyawan($id_karyawan);
        // $this->load->view('InputGaji',$data);


        $hasil = $this->M_Karyawan->getJabatan($id_karyawan);

        $jabatan;
            foreach($hasil as $row){
                $jabatan=$row->jabatan;
            }  
            if($jabatan == "kasir"){
                $query = $this->M_kasir->getNamakasir($id_karyawan);
                $nama_karyawan;
                foreach($query as $row){
                    $nama_karyawan=$row->nama_kasir;
                    $data['id_karyawan'] = $id_karyawan;
                    $data['nama_karyawan'] = $nama_karyawan;
                    $this->load->view('InputGaji',$data);
                }
                
            } else if ($jabatan == "supervisor"){
                $query = $this->M_Supervisor->getNamaSupervisor($id_karyawan);
                $nama_karyawan;
                foreach($query as $row){
                    $nama_karyawan=$row->nama_supervisor;
                    $data['id_karyawan'] = $id_karyawan;
                    $data['nama_karyawan'] = $nama_karyawan;
                    $this->load->view('InputGaji',$data);
                
                }
            } else if ($jabatan == "pelayan"){
                $query = $this->M_Pelayan->getNamapelayan($id_karyawan);
                $nama_karyawan;
                foreach($query as $row){
                    $nama_karyawan=$row->nama_karyawan;
                    $data['id_karyawan'] = $id_karyawan;
                    $data['nama_karyawan'] = $nama_karyawan;
                    $data['jabatan'] = $jabatan;
                    $this->load->view('InputGaji',$data);
                }
         
        }
    }
}
   