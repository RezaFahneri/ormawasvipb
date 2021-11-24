<?php

class Model_prestasi extends CI_Model{
	function tampil_data(){
		return $this->db->get('data_prestasi');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function data_ormawa(){
		return $this->db->get('ormawa');
	}
	function data_ipk(){
		return $this->db->get('ormawa_proker');
	}
}