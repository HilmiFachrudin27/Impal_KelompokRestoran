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
        $this->load->view('menu');
    }

    public function show_Menu($nomeja){
        $data['no_meja'] = $nomeja;
        $data['menu'] = $this->M_Menu->show_menu();
        $this->load->view('menu',$data);
    }


    public function addPesanan($nomeja) {
        $inp = 1;
        for ($i = 0; $i<5; $i++){
            if (null!=$this->input->post('menu'.$i)){
                $id_menu=$this->input->post('menu'.$i);
                $jumlah=$this->input->post('jumlah'.$i);
                $query = $this->M_Pesanan->add_memesan($id_menu,$jumlah,$nomeja);
                $query3 = $this->M_Menu->Kurangi_JumlahMenu($id_menu);

            }
        }
        redirect('/CCustomer/');
    }

}
