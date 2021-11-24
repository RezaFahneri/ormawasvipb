<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class prestasi_rest extends REST_Controller
{

	function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();
		$this->load->model('model_prestasi');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index_get()
	{
		$id = $this->get('id');
		if ($id == '') {
			$kontak = $this->db->get('data_prestasi')->result();
		} else {
			$this->db->where('id', $id);
			$kontak = $this->db->get('data_prestasi')->result();
		}
		$this->response($kontak, 200);
	}

	function index_post()
	{
		$data = array(
			'id'           => $this->post('id'),
			'nama'          => $this->post('nama'),
			'nim'          => $this->post('nim'),
			'jabatan'    => $this->post('jabatan'),
			'prestasi'		=> $this->post('prestasi')
		);
		$insert = $this->db->insert('data_prestasi', $data);
		if ($insert) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}

	function index_put()
	{
		$id = $this->put('id');
		$data = array(
			'id'           => $this->put('id'),
			'nama'          => $this->put('nama'),
			'nim'          => $this->put('nim'),
			'jabatan'    => $this->put('jabatan'),
			'prestasi'		=> $this->put('prestasi')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('data_prestasi', $data);
		if ($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}

	function index_delete()
	{
		$id = $this->delete('id');
		$this->db->where('id', $id);
		$delete = $this->db->delete('data_prestasi');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
