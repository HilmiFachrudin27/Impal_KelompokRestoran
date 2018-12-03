<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CGaji extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->model('M_karyawan');


    }
    public function index(){
        $this->load->view('Gaji');
    }

    public function InsertGaji(){
        
        
    }
}