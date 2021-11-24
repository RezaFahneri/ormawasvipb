<?php

class Model_proposal extends CI_Model{
	function tampil_data($table){
		return $this->db->get($table);
	}
	function detail_data($id=NULL){
		$query = $this->db->get_where('data_proposal', array('id' => $id)) ->row();
		return $query;
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
}