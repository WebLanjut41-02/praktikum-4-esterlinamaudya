<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_bibit(){
		$sql = $this->db->query("SELECT * FROM tb_bibit WHERE flag = 1");
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama = $this->db->escape($post['name']);
		$jenis = $this->db->escape($post['jen']);
		$supplier = $this->db->escape($post['sup']);

		$sql = $this->db->query("INSERT INTO tb_bibit VALUES (NULL, $nama, $jenis, $supplier, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM tb_bibit WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		$nama = $this->db->escape($post['name']);
		$jenis = $this->db->escape($post['jen']);
		$supplier = $this->db->escape($post['sup']);

		$sql = $this->db->query("UPDATE tb_bibit SET name = $nama, jenis = $jenis, supplier = $supplier WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("UPDATE tb_bibit SET flag = 0 WHERE id = ".intval($id));
	}	

}