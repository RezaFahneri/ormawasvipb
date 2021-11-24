<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class proposal_rest extends REST_Controller
{

	function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();
		$this->load->model('model_proposal');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index_get()
	{
		$id = $this->get('id');
		if ($id == '') {
			$kontak = $this->db->get('data_proposal')->result();
		} else {
			$this->db->where('id', $id);
			$kontak = $this->db->get('data_proposal')->result();
		}
		$this->response($kontak, 200);
	}

	function index_post()
	{
		$data = array(
            'id'           => $this->post('id'),
            'nama_kegiatan' => $this->post('nama_kegiatan'),
            'nama_ormawa' => $this->post('nama_ormawa'),
            'deskripsi' => $this->post('deskripsi'),
            'bentuk' => $this->post('bentuk'),
            'status' => $this->post('status'),
            'berkas' => $this->post('berkas')
		);
		$insert = $this->db->insert('data_proposal', $data);
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
            'id'           => $this->post('id'),
			'nama_kegiatan' => $this->post('nama_kegiatan'),
            'nama_ormawa' => $this->post('nama_ormawa'),
            'deskripsi' => $this->post('deskripsi'),
            'bentuk' => $this->post('bentuk'),
            'status' => $this->post('status'),
            'berkas' => $this->post('berkas')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('data_proposal', $data);
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
		$delete = $this->db->delete('data_proposal');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
