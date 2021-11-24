<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class struktur_rest extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('model_struktur');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('struktur_ormawa_micro')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('struktur_ormawa_micro')->result();
        }
        $this->response($kontak, 200);
    }

    function index_post()
    {
        $data = array(
            'id'           => $this->post('id'),
            'nim' => $this->post('nim'),
            'nama' => $this->post('nama'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'jabatan' => $this->post('jabatan'),
            'prodi' => $this->post('prodi'),
            'status' => $this->post('status'),
        );
        $insert = $this->db->insert('struktur_ormawa_micro', $data);
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
            'nim' => $this->post('nim'),
            'nama' => $this->post('nama'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'jabatan' => $this->post('jabatan'),
            'prodi' => $this->post('prodi'),
            'status' => $this->post('status'),
        );
        $this->db->where('id', $id);
        $update = $this->db->update('struktur_ormawa_micro', $data);
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
        $delete = $this->db->delete('struktur_ormawa_micro');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
