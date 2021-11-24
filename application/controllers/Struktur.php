<?php

class Struktur extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->Model('Model_struktur');
        $this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
	}

	function index(){
		$data['data_struktur'] = $this->Model_struktur->tampil_data()->result();
		$data['title'] = "Struktur Organisasi | Ormawa SV IPB";
		$this->load->view('v_template', $data);
		$this->load->view('struktur/v_struktur',$data);
		$this->load->view('footer');
	}

	function tambah(){
		$data['title'] = "Tambah Struktur Organisasi | Ormawa SV IPB";
		$this->load->view('v_template', $data);
		$this->load->view('struktur/v_input_struktur');
		$this->load->view('footer');
	}

	function tambah_aksi(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_ormawa = $this->input->post('nama_ormawa');
		$jabatan = $this->input->post('jabatan');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$status = $this->input->post('status');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'nama_ormawa' => $nama_ormawa,
			'jabatan' => $jabatan,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'status' => $status,
			);
		$this->Model_struktur->input_data($data,'data_struktur');
		redirect('struktur/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['data_struktur'] = $this->Model_struktur->edit_data($where,'data_struktur')->result();
		$data['title'] = "Edit Struktur Organisasi | Ormawa SV IPB";
		$this->load->view('v_template', $data);
		$this->load->view('struktur/v_edit_struktur',$data);
		$this->load->view('footer');
	}

	function update(){
	$id = $this->input->post('id');
	$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_ormawa = $this->input->post('nama_ormawa');
		$jabatan = $this->input->post('jabatan');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$status = $this->input->post('status');

	$data = array(
		'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'nama_ormawa' => $nama_ormawa,
			'jabatan' => $jabatan,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'status' => $status,
	);

	$where = array('id' => $id);

	$this->Model_struktur->update_data($where,$data,'data_struktur');
	redirect('struktur/index');
}

	function hapus($id){
		$where = array('id' => $id);
		$this->Model_struktur->hapus_data($where,'data_struktur');
		redirect('struktur/index');
	}
}