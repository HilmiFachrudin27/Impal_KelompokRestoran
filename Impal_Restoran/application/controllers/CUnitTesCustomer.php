<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUnitTesCustomer extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->library("unit_test");
        $this->load->model('M_customer');
    }
    public function index(){
        echo "Test Unit";
    }
    public function CekDeleteCustomer(){
        $no_meja = 13;
        $query = $this->M_customer->delete_customer($no_meja);
        if($query){
            $status = FALSE;
        }else if(!$query){
            $status = TRUE;
        }
        return $status;
    }
    public function TesDeleteCustomer(){
        $status = $this->CekDeleteCustomer();
        $expected_result = TRUE;
        $test_name = 'Cek Delete Customer';
        echo $this->unit->run($status,$expected_result, $test_name);
    }
    public function CekAddCustomer(){
        $data = array (
            'no_meja' => 14,
            'nama_customer' => "Wulan"
        );
        $query = $this->M_customer->add_customer($data);
        if($query){
            $status = FALSE;
        }else if(!$query){
            $status = TRUE;
        }
        return $status;
    }
    public function TesAddCustomer(){
        $status = $this->CekAddCustomer();
        $expected_result = TRUE;
        $test_name = 'Cek Add Customer';
        echo $this->unit->run($status,$expected_result, $test_name);

    }

    
}