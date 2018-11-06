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
        $this->load->model('M_customer');
    }
    public function index(){
        $this->load->view('Menu');
    }

    public function show_Menu(){
        $data['menu'] = $this->M_menu->show_menu();
        $this->load->view('menu',$data);
    }


    public function addPesanan($nama_menu, $jumlah, $nama_customer, $no_meja){
        $nama_menu = $this->input->post['nama_menu'];
        $jumlah = $this->input->post['jumlah'];
        $nama_customer = $this->input->post['nama_customer'];
        $no_meja = $this->input->post['no_meja'];
        $id_menu= $this->db->get($nama_menu);
        $data_customer= array(
            'no_meja'=> $no_meja,
            'nama_customer'=>$nama_customer
        );
        $query=$this->M_customer->add_customer($data_customer);
        $data_pesanan=array(
            'id_menu'=> $id_menu;
            'no_meja'=>$no_meja;
        );
        $query2=$this->M_pesanan->add_memesan($data_pesanan);

    }

