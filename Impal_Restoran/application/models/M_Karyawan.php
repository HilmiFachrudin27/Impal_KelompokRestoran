<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Karyawan extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function add_Karyawan($data) {
		$this->db->insert('karyawan', $data);
	}
	public function get_Karyawan($id_karyawan) {
		$this->db->where('id_karyawan', $id_karyawan);
		$query=$this->db->get('karyawan');
		return $query->result_array();
	}
	public function login($id_karyawan, $password) {
		$query=$this->db->query("select count(*) as exist from karyawan where id_karyawan='".$id_karyawan."' and pssword='".$password."'");
		return $query->row_array();
	}
	public function getJabatan($id_karyawan) {
		$query=$this->db->query("select jabatan from karyawan where id_karyawan='".$id_karyawan."'");
		return $query->result();
	}
	public function getGaji_bulan() {
		$this->db->where('id_karyawan', $id_karyawan);
		$this->db->where('bulan', $bulan);
		$query=$this->db->get('gaji');
		return $query->result_array();
	}
	public function InputKehadiran($data) {
		$this->db->insert('kehadiran', $data);
	}
	public function getJam_Datang($id_karyawan) {
		$this->db->where('id_karyawan');
	}
	public function getJam_pulang($id_karyawa) {}
	public function InputGaji($data2) {
		$this->db->insert('gaji', $data);
	}
	public function showKaryawan() {
		$this->db->select('karyawan.id_karyawan,jabatan');
		$this->db->from('karyawan');
        $this->db->join('kasir', 'kasir.id_karyawan = karyawan.id_karyawan');
        $this->db->join('supervisor', 'supervisor.id_karyawan = karyawan.id_karyawan');
        $this->db->join('pelayan', 'pelayan.id_karyawan = karyawan.id_karyawan');
		$query=$this->db->get();
		return $query->result();
	}
}
