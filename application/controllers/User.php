<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id_login = $this->get('id_login');
        if ($id_login == '') {
            $ormawa = $this->db->get('tbl_login')->result();
        } else {
            $this->db->where('id_login', $id_login);
            $ormawa = $this->db->get('tbl_login')->result();
        }
        $this->response($ormawa, 200);
    }

    function index_post() {
        $data = array(
                    'id_login'           => $this->post('id_login'),
                    'nama'          => $this->post('nama'),
                    'foto'    => $this->post('foto'),
                    'status'    => $this->post('status'),
                    'email'    => $this->post('email'),
                    'username'    => $this->post('username'),
                    'password'    => $this->post('password'));
        $insert = $this->db->insert('tbl_login', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $id_login = $this->put('id_login');
        $data = array(
            'id_login'           => $this->put('id_login'),
            'nama'          => $this->put('nama'),
            'foto'    => $this->put('foto'),
            'status'    => $this->put('status'),
            'email'    => $this->put('email'),
            'username'    => $this->put('username'),
            'password'    => $this->put('password'));
        $this->db->where('id_login', $id_login);
        $update = $this->db->update('tbl_login', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id_login = $this->delete('id_login');
        $this->db->where('id_login', $id_login);
        $delete = $this->db->delete('tbl_login');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
