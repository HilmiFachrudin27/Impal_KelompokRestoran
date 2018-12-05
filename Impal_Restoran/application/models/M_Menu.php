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
    public function get_Jumlah($id_menu){
        $this->db->select('jumlah_menu');
        $this->db->where('id_menu', $id_menu);
        $query = $this->db->get('menu');
        return $query->result(); 
    }
    public function get_IdMenu($nama_menu){
        $query = $this->db->query("select id_menu from menu where nama_menu ='".$nama_menu."'");
        return $query->result();

    }
    public function show_menu(){
        $query = $this->db->get('menu');
        return $query->result(); 
    }
    public function Kurangi_JumlahMenu($id_menu,$jumlah){
        $query = $this->db->query("update menu SET jumlah_menu = jumlah_menu - $jumlah  where id_menu = '".$id_menu."'"); 

    }
}