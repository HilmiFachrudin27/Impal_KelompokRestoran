<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInputGaji extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->model('M_Karyawan');
        $this->load->helper('date');


    }
    public function index(){
        $this->load->view('InputGaji');
    }
    public function inputGaji(){
        $id_karyawan = $this->input->post('id_karyawan');
        $bulan = $this->input->post('bulan_gaji');
        $gajipokok = $this->input->post('gaji_karyawan');
        $count = $this->M_Karyawan->CountKehadiran($id_karyawan);
        if ($count['hadir']>5){
           $bonus = 50000;
        } else {
            $bonus = 0;
        }
        $data = array(
            'jumlah_gaji' => $gajipokok,
            'bonus_gaji'=> $bonus,
            'bulan'=>$bulan,
            'id_karyawan'=>$id_karyawan
        );
        $query = $this->M_Karyawan->addGaji($data);
        redirect('/CHome/','refresh');
    }
}