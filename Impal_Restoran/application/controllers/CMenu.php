<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMenu extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('M_Menu');
        $this->load->model('M_Pesanan');
    }
    public function index(){
        $this->load->view('Menu');
    }

    public function show_Menu(){
        $data['menu'] = $this->M_menu->show_menu();
        $this->load->view('menu',$data);
    }

    public function addPesanan(){
        
    }

