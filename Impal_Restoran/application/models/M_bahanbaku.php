<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_bahanbaku extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_bahanbaku($data){
        $this->db->insert('memesan',$data); 
    
    }
   
    public function edit_bahanbaku($data,$nama_suplier){
        $this->db->update('bahanbaku', $data, array('id_bahanbaku' => $id_bahanbaku));
    }

}