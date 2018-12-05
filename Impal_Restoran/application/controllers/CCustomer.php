<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCustomer extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->model('M_customer');
    }
    public function index(){
        $this->load->view('inputCustomer.php');
    }
    public function inputCustomer(){
       $no_meja = $this->input->post('no_meja');
       $nama_customer = $this->input->post('nama_customer');
       $result = $this->M_customer->getNoMeja($no_meja);
       if($result['jumlah']=0){
            $data = array (
                'no_meja' => $no_meja,
                'nama_customer' => $nama_customer
            );
            $query = $this->M_customer->add_customer($data);

            if ($query){
                $this->load->view('inputCustomer.php');
                
            } else {
                redirect('/CMenu/show_menu/'.$no_meja,'refresh');
                
            }
        } else {
            echo "<script>
            alert('Meja Sedang Digunakan');
            </script>";
            $this->load->view('inputCustomer.php'); 
        }
    }
}