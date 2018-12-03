<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPemilik extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('M_Karyawan');
        $this->load->model('M_Supervisor');
        $this->load->model('M_Pelayan');
        $this->load->model('M_kasir');


    }
    public function index(){
        $this->load->view('DaftarKaryawan');
    }
    public function ShowKaryawan(){
        $data['karyawan'] = $this->M_Karyawan->showKaryawan();
        $this->load->view('DaftarKaryawan',$data);
    }

    public function InputGaji(){
        
    }
   
        

}
