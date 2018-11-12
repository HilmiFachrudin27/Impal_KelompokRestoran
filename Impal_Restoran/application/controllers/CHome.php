<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CHome extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
    }
    public function index(){
        $this->load->view('home');
    }
}