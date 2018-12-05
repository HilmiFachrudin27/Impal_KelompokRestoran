<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUnitTestKaryawan extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->library("unit_test");
        $this->load->model('M_Karyawan');
    }
    public function index(){
        echo "Test Unit";
    }
    public function CekdAddGaji(){
        $id_karyawan = "pl01";
        $count = $this->M_Karyawan->CountKehadiran($id_karyawan);
        if ($count['hadir']>5){
           $bonus = 50000;
        } else {
            $bonus = 0;
        }
        $data = array(
            'jumlah_gaji' => 1000000,
            'bonus_gaji'=> $bonus,
            'bulan'=> "2018-01",
            'id_karyawan'=> $id_karyawan
        );
        $query = $this->M_Karyawan->addGaji($data);
        if($query){
            $status = FALSE;
        }else if (!$query){
            $status = TRUE;
        }
        return $status;
    }
    public function TestGaji(){
        $status = $this->CekdAddGaji();
        $expected_result = TRUE;
        $test_name = 'Cek Add Gaji';
        echo $this->unit->run($status,$expected_result, $test_name);

    }
    public function CekCountKehadiran(){
        $id_karyawan = "pl01";
        $count = $this->M_Karyawan->CountKehadiran($id_karyawan);
        return $count['hadir'];
    }
    public function TestCountKehadiran(){
        $count = $this->CekCountKehadiran();
        $test_name = 'cek count kehadiran';
        $expected_result = 2;
        echo  $this->unit->run($count,$expected_result, $test_name);
    }
    public function CekLogin(){
        $id_karyawan = "pl01";
        $password = "1234";
        $result = $this->M_Karyawan->login($id_karyawan,$password);
        return $result['exist'];
    }


    public function TestLogin(){
        $login = $this->CekLogin();
        $expected_result = 1;
        $test_name = 'Cek Login';
        echo $this->unit->run($login,$expected_result, $test_name);
    }

    public function CekAddKaryawan(){
        $data = array(
            'id_karyawan' => "pl007",
            'jabatan' => "pelayan",
            'pssword' => "5555"
        );
        $query = $this->M_Karyawan->add_Karyawan($data);
        if ($query){
            $status = FALSE;
        }else if (!$query){
            $status = TRUE;
        }
        return $status;
    }

    public function TestAddKaryawan(){
        $status = $this->CekAddKaryawan();
        $expected_result = TRUE;
        $test_name = 'cek add Karyawan';
        echo $this->unit->run($status,$expected_result, $test_name);
    }

    public function CekGetJabatan(){
        $id_karyawan = "pl01";
        $hasil = $this->M_Karyawan->getJabatan($id_karyawan);
            $jabatan;
            foreach($hasil as $row){
                $jabatan=$row->jabatan;
            }
        return $jabatan;
    }
    public function TestGetJabatan(){
        $jabatan = $this->CekGetJabatan();
        $expected_result = "pelayan";
        $test_name = 'Cek get Jabatan';
        echo $this->unit->run($jabatan,$expected_result, $test_name);
    }

    public function CekInsertKehadiran(){
        $data = array(
            'jam_hadir' => "09:00:00",
            'jam_pulang' => "15:00:00",
            'id_karyawan' => "pl01", 
            'tanggal'=> "2018-12-03"
        );
        $query = $this->M_Karyawan->InputKehadiran($data);
        if (!$query){
            $status = TRUE;
        } else if ($query){
            $status = FALSE;
        }
        return $status;
    }

    public function TestInsertKehadiran(){
       $status= $this->CekInsertKehadiran();
       $expected_result = TRUE;
       $test_name = 'Cek Insert Kehadiran';
       echo $this->unit->run($status,$expected_result, $test_name);
    }

    
    
}