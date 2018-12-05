<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUnitTestMenu extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->library("unit_test");
        $this->load->model('M_Menu');
    }
    public function index(){
        echo "Test Unit";
    }
    public function CekGetJumlah(){
        $id_menu = "ST02";
        $hasil = $this->M_Menu->get_Jumlah($id_menu);
        $jumlah;
            foreach($hasil as $row){
                $jumlah=$row->jumlah_menu;
            }
        return $jumlah;
    }
    public function TestGetJumlah(){
        $jumlah = $this->CekGetJumlah();
        $expected_result = 13;
        $test_name = 'cek get jumlah';
        echo $this->unit->run($jumlah,$expected_result, $test_name);
    }
    public function cekKurangijumlah(){
        $jumlah= 2;
        $id_menu = "ST02";
       $query = $this->M_Menu->Kurangi_JumlahMenu($id_menu,$jumlah);
       if ($query){
           $status = FALSE;
       }else if (!$query){
           $status = TRUE;
       }
       return $status;
    }
    public function TestKurangiJumlah(){
        $status = $this->cekKurangijumlah();
        $expected_result =TRUE;
        $test_name = 'Test kurang jumlah available menu';
        echo $this->unit->run($status,$expected_result, $test_name);
    }
    public function CekGetIdMenu(){
        $nama_menu = "BAKSO URAT";
        $hasil = $this->M_Menu->get_IdMenu($nama_menu);
        $id_menu;
            foreach($hasil as $row){
                $id_menu=$row->id_menu;
            }
        return $id_menu;

    }
    public function TestGetIdMenu(){
        $id_menu = $this->CekGetIdMenu();
        $expected_result = "MN02";
        $test_name = 'Cek Get Id Menu';
        echo $this->unit->run($id_menu,$expected_result, $test_name);
    }

    public function CekShowMenu(){
        $data['menu'] = $this->M_Menu->show_menu();
        return $data['menu'];
    }
    public function TestShowMenu(){
        $data = $this->CekShowMenu();
        $test_name = 'Cek Show Menu ';
        echo $this->unit->run($data,'is_array', $test_name);
    }

    public function CekAddMenu(){
        $data = array(
            'id_menu' => "MN02",
            'nama_menu' =>"BAKSO URAT",
            'harga_menu' => 20000,
            'jumlah_menu' => 30,
            'status' => "available",
            'deskripsi' => "Bakso yang terbuat dari daging pilihan"
        );

        $query = $this->M_Menu->add_Menu($data);
        if($query){
            $status = FALSE;
        }else if(!$query){
            $status = TRUE;
        }
        return $status;
    }
    public function TestAddMenu(){
        $status = $this->CekAddMenu();
        $expected_result = TRUE;
        $test_name = 'Cek Add Menu ';
        echo $this->unit->run($status,$expected_result, $test_name);
    }


}