<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('index.php');
    }

    function Login(){
        $this->load->view('index.php');
    }
   
}