<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CKehadiran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('M_Karyawan');
        $this->load->helper('date');

    }
    public function index(){
        $this->load->view('absen');
    }

    public function inputPresensi($id_karyawan){
        $jam_datang = $this->input->post('jam_masuk');
        $jam_keluar = $this->input->post('jam_keluar');
        
        $data = array(
            'jam_hadir' => $jam_datang,
            'jam_pulang' => $jam_keluar,
            'id_karyawan' => $id_karyawan 
        );
        $query = $this->M_Karyawan->InputKehadiran($data);
        $JamKerja = (int)$jam_keluar - (int)$jam_datang;
        $gaji = $jamKerja * 40000;
        $query2 = $this->M_Karyawan->InputGaji();
        if( $query ) {
            $this->load->view('home');

        }
        

    }
}