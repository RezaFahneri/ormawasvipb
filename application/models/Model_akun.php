<?php
class Model_akun extends CI_model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function getDetail($id)
	{
		return $this->db->where('id_login', $id)->get('tbl_login')->row();
	}
}
