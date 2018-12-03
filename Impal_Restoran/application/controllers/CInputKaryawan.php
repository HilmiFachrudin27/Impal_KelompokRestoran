<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CKehadiran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('M_Karyawan');
        $this->load->helper('date');
    }
    public function index(){
        $this->load->view('inputKaryawan');
    }    

        
    public function addKaryawan(){
        $id_karyawan = $this->input->post('id_karyawan');
        $nama_karyawan = $this->input->post('nama_karyawan');
        $jabatan = $this->input->post('jabatan');
        $pssword = $this->input->post('password');
                
        $data = array(
            'id_karyawan' => $id_karyawan,
            'jabatan' => $jabatan,
            'pssword' => $pssword
        );
        $query = $this->M_Karyawan->add_Karyawan($data);
        if (!$query) {
            if ($jabatan == "kasir"){
                $data2 = array(
                    'id_karyawan' => $id_karyawan,
                    'nama_kasir'=> $nama_karyawan
                );
                $kasir = $this->M_kasir->add_kasir($data2);
        
            } else if ($jabatan == "supervisor"){
                $data3 = array(
                    'id_karyawan' => $id_karyawan,
                    'nama_supervisor'=> $nama_karyawan  
                );
                $supervisor = $this->M_Supervisor->add_Supervisor($data3);
                        
            }else if ($jabatan == "pelayan"){   
                $data4 = array(
                    'id_karyawan' => $id_karyawan,
                    'nama_pelayan'=> $nama_karyawan  
                );
                $pelayan = $this->M_Pelayan->add_Supervisor($data4);
        
            }
                        
                    redirect('/CHome/');
        
                } 
    }
}
