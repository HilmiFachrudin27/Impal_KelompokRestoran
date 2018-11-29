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
        $jumlah = $this->input->post('inp0'.$inp);
        $id_menu = $this->M_Menu->get_menu();
        $data = array(
            'id_menu' => $id_menu,
            'no_meja' => $nomeja,
            'jumlah_pesan' => $jumlah
        );
        $query = $this->M_Pesanan->add_memesan($data);
    }
        if ($query) {
            echo "<script>
            alert('Sorry Try Again');
            </script>";
            redirect('/CMenu/show_menu/'.$no_meja,'refresh');
        } else {
            redirect('home','refresh');
        }
        
        
        // $id_menu= $this->db->get($nama_menu);
        // // $data_customer= array(
        // //     'no_meja'=> $no_meja,
        // //     'nama_customer'=>$nama_customer
        // // );
        // // $query=$this->M_customer->add_customer($data_customer);
        // // $data_pesanan=array(
        // //     'id_menu'=> $id_menu,
        // //     'no_meja'=>$no_meja
        // // );
        // $query2=$this->M_pesanan->add_memesan($data_pesanan);
        // $query3=$this->M_menu->Kurangi_JumlahMenu($id_menu);
        // redirect('home','refresh');
    }

}
