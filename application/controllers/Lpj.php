<?php
class Lpj extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_lpj');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
            redirect('login');
        }
    }

    function index()
    {
        $data['data_lpj'] = $this->Model_lpj->tampil_data('data_lpj')->result();
        $data['title'] = "LPJ | Ormawa SV IPB";
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_lpj', $data);
        $this->load->view('footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail LPJ | Ormawa SV IPB";
        $detail = $this->Model_lpj->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_detail_lpj', $data);
        $this->load->view('footer');
    }

    function tambah()
    {
        $data['title'] = "Tambah LPJ | Ormawa SV IPB";
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_input_lpj', $data);
        $this->load->view('footer');
    }

    function tambah_aksi()
    {
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $nama_ormawa = $this->input->post('nama_ormawa');
        $deskripsi = $this->input->post('deskripsi');
        $bentuk = $this->input->post('bentuk');
        $status = $this->input->post('status');
        $berkas = $this->input->post('berkas');

        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'nama_ormawa' => $nama_ormawa,
            'deskripsi' => $deskripsi,
            'bentuk' => $bentuk,
            'status' => $status,
            'berkas' => $berkas
        );
        $this->Model_lpj->input_data($data, 'data_lpj');
        redirect('lpj');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['data_lpj'] = $this->db->query("SELECT * FROM data_lpj WHERE id='$id'")->result();
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_edit_lpj', $data);
        $this->load->view('footer');
    }

    function update()
    {
        $id = $this->input->post('id');
        $data['data_lpj'] = $this->db->query("SELECT * FROM data_lpj WHERE id='$id'")->result();
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $nama_ormawa = $this->input->post('nama_ormawa');
        $deskripsi = $this->input->post('deskripsi');
        $bentuk = $this->input->post('bentuk');
        $status = $this->input->post('status');
        $berkas = $this->input->post('berkas');

        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'nama_ormawa' => $nama_ormawa,
            'deskripsi' => $deskripsi,
            'bentuk' => $bentuk,
            'status' => $status,
            'berkas' => $berkas
        );

        $where = array('id' => $id);
        $this->load->Model('Model_lpj');
        $this->Model_lpj->update_data($where, $data, 'data_lpj');
        redirect('lpj');
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->Model_lpj->hapus_data($where, 'data_lpj');
        redirect('lpj');
    }
}
