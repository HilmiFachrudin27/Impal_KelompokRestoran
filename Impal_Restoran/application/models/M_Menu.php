<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Menu extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function add_Menu($data){
        $this->db->insert('menu',$data);
    }

    // public function edit_Menu($data, $id_menu){
    //     $this->db->update('menu', $data, array('id_menu' => $id_menu));
    // }

    public function get_IdMenu($nama_menu){
        $query = $this->db->query("select id_menu from menu where nama_menu ='".$nama_menu."'");
        return $query->result();

    }
    public function show_menu(){
        $query = $this->db->get('menu');
        return $query->result(); 
    }
    public function Kurangi_JumlahMenu($id_menu,$jumlah){
        $query = $this->db->query("update jumlah_menu SET jumlah_menu = jumlah_menu - $jumlah from menu where id_menu = '".$id_menu."'");
        // $this->db->set('jumlah_menu', 'jumlah_menu- "'.$jumlah.'" ');
        // $this->db->where('id_menu',$id_menu);
        // $this->db->update('menu');
        

    }
}