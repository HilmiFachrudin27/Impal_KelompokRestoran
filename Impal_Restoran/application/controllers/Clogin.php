<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('M_Karyawan');
        $this->load->library("unit_test");
    }
    public function index(){
        $this->load->view('index.php');
    }

    function Login(){
        $id_karyawan = $this->input->post('id_karyawan');
        $password = $this->input->post('password');
        $result = $this->M_Karyawan->login($id_karyawan,$password);
        if($result['exist']>0){
            $hasil = $this->M_Karyawan->getJabatan($id_karyawan);
            $jabatan;
            foreach($hasil as $row){
                $jabatan=$row->jabatan;
            }
            // if (isset($jabatan)){
                $datasession = array(
                    'id_karyawan'  => $id_karyawan,
                    'jabatan'      => $jabatan,
                    'password'     => $password,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($datasession);
                $this->load->view('home',$datasession);
            
        }else if (($id_karyawan == "owner") && ($password == "1234") ){
            $datasession = array(
                'id_karyawan'  => $id_karyawan,
                'jabatan'      => "pemilik",
                'password'     => $password,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($datasession);
            $this->load->view('home',$datasession);
        } else {
            echo "<script>
                    alert('Kombinasi ID Karyawan dan password salah');
                </script>";
            $this->load->view('index');
        }
    }
    function logout(){
        $this->session->unset_userdata($datasession);
        $this->session->sess_destroy();
        redirect('','refresh');
    }
    
}
   

