<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLihatGajiPelayan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('M_Pelayan');
        $this->load->helper('date');

    }
    public function index(){
        $this->load->view('LihatGajiPelayan');
    }
    public function ShowGajiPelayan($id_karyawan){
        $query=$this->M_Pelayan->getNamapelayan($id_karyawan);
        $nama_karyawan;
        foreach ($query as $key){
            $nama_karyawan=$key->nama_karyawan;
        }
        $data['nama'] = $nama_karyawan;
        $data['gaji'] = $this->M_Pelayan->GetGajiPelayan($id_karyawan);
        $this->load->view('LihatGajiPelayan',$data);
    }
}