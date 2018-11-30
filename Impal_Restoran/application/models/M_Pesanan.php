<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Pesanan extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add_memesan($id,$jum,$nomeja){
        $this->db->query("insert into memesan(id_menu,no_meja,jumlah_pesan) values ('$id',$nomeja,$jum)");
    }
    public function add_order($data){
        $this->db->insert('order',$data);
    }
    public function edit_pesanan($data,$nama_customer){
        $this->db->update('memesan', $data, array('id_menu' => $id_menu));
    }

}