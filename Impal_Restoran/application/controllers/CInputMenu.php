<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInputMenu extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->model('M_Menu');
    }
    public function index(){
        $this->load->view('inputMenu');
    }
    public function addMenu(){
        $id_menu = $this->input->post('id_menu');
        $nama_menu = $this->input->post('nama_menu');
        $harga = $this->input->post('harga_menu');
        $jumlah_menu = $this->input->post('jumlah_menu');
        $deskripsi = $this->input->post('deskripsi');
        $data = array(
            'id_menu' => $id_menu,
            'nama_menu' =>$nama_menu,
            'harga_menu' => $harga,
            'jumlah_menu' => $jumlah_menu,
            'status' => "available",
            'deskripsi' => $deskripsi
        );

        $query = $this->M_Menu->add_Menu($data);
        if ($query){

        } else if (!$query){
            redirect('/CInputMenu','refresh');
        }
    }

}