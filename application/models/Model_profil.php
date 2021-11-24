<?php
class Model_profil extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function detail_data($id=NULL){
		$query = $this->db->get_where('tbl_profil', array('id_profil' => $id)) ->row();
		return $query;
	}

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    // function edit_data($where,$table){		
    //     return $this->db->get_where($table,$where);
    // }

    // public function update_data($table,$data,$where){
	// 	$this->db->update($table,$data,$where);
	// }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
