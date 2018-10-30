<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('m_Karyawan');
    }
    public function index(){
        $this->load->view('index.php');
    }

    function Login(){
        $id_karyawan = $this->input->post['id_karyawan'];
        $password = $this->input->post['password'];
        $result=$this->m_karyawan->login($id_karyawan,$password);
        if($result['exist']>0){
            $datasession = array(
                'id_karyawan'  => $id_karyawan,
                'password'     => $password,
                'logged_in' => TRUE
        );
        
        $this->session->set_userdata($datasession);
        if ($this->session->datasession('id_karyawan')= "Ks"%){
            $this->load->view('homekasir',$id_karyawan);
        } else if(($this->session->datasession('id_karyawan')= "Pl"%)) {
            $this->load->view('');
        } else if(($this->session->datasession('id_karyawan')= "Sp"%)){
            $this->load->view('');
        }
        }
        
    }
   
    }
}