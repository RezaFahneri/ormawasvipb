<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_proker','Model_akun','Model_profil','Model_login');
        $this->load->helper('url');
		$this->load->library('session');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }

	public function index()
	{
		$data['title']="Ormawa SV IPB";
		$data['profil'] = $this->Model_akun->get_data('tbl_login')->result();
		// $data['jumlah_akun'] = $this->db->query("SELECT count FROM tbl_login")->result();
		$this->load->view('v_template',$data);
		$this->load->view('v_beranda',$data);
		$this->load->view('footer',$data);
	}

	public function logout(){
		$data = array(
			'username'	=> '',
			'logged_in'	=> false,
			'status'		=> ''
		);

		$this->session->sess_destroy();
		redirect('login');
	}
}
