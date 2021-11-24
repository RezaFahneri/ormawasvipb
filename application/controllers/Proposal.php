<?php


class Proposal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_proposal');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') == false) {
            redirect('login');
        }
    }

    function index()
    {
        $data['data_proposal'] = $this->Model_proposal->tampil_data('data_proposal')->result();
        $data['title'] = "Proposal | Ormawa SV IPB";
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_proposal', $data);
        $this->load->view('footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Proposal | Ormawa SV IPB";
        $detail = $this->Model_proposal->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_detail_proposal', $data);
        $this->load->view('footer');
    }

    function tambah()
    {
        $data['title'] = "Tambah Proposal | Ormawa SV IPB";
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_input_proposal');
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
        $this->Model_proposal->input_data($data, 'data_proposal');
        redirect('proposal/index');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['data_proposal'] = $this->db->query("SELECT * FROM data_proposal WHERE id='$id'")->result();
        // $data['data_proposal'] = $this->Model_proposal->edit_data($where, 'data_proposal')->result();
        $data['title'] = "Edit Proposal | Ormawa SV IPB";
        $this->load->view('v_template', $data);
        $this->load->view('berkas/v_edit_proposal', $data);
        $this->load->view('footer');
    }

    function update()
    {
        $id = $this->input->post('id');
        $data['data_proposal'] = $this->db->query("SELECT * FROM data_proposal WHERE id='$id'")->result();
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

        $where = array(
            'id' => $id
        );
        $this->load->Model('Model_proposal');
        $this->Model_proposal->update_data($where, $data, 'data_proposal');
        redirect('proposal');
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->Model_proposal->hapus_data($where, 'data_proposal');
        redirect('proposal');
    }

    function gdrive()
    {
        $this->load->library('session');
        $this->load->library('google_drive');
        $KEY_FILE_LOCATION = APPPATH . "third_party/gdrive/oauth-credentials.json";

        // setting config untuk layanan akses ke google drive
        $client = new Google_Client();
        $client->setAuthConfig($KEY_FILE_LOCATION);
        $client->addScope("https://www.googleapis.com/auth/drive");
        $service = new Google_Service_Drive($client);

        // mengecek keberadaan token session
        if (empty($_SESSION['upload_token'])) {
            // jika token belum ada, maka lakukan login via oauth
            $authUrl = $client->createAuthUrl();
            header("Location:" . $authUrl);
        } else {
            // jika token sudah ada, maka munculkan form upload file
            // jika form upload disubmit
            if (isset($_POST['submit'])) {
                // menggunakan token untuk mengakses google drive
                $client->setAccessToken($_SESSION['upload_token']);
                // membaca token respon dari google drive
                $client->getAccessToken();

                // instansiasi obyek file yg akan diupload ke Google Drive
                $file = new Google_Service_Drive_DriveFile();
                // set nama file di Google Drive disesuaikan dg nama file aslinya
                $file->setName($_FILES["fileToUpload"]["name"]);
                // proses upload file ke Google Drive dg multipart
                $result = $service->files->create($file, array(
                    'data' => file_get_contents($_FILES["fileToUpload"]["tmp_name"]),
                    'mimeType' => 'application/octet-stream',
                    'uploadType' => 'multipart'
                ));

                // menampilkan nama file yang sudah diupload ke google drive
                echo $result->name . "<br>";
                session_start();
                $_SESSION["success"] = '
                <div class="alert alert-success" role="alert">
                    Data berhasil ditambahkan !!
                </div>';

                if (!empty($_SESSION["success"])) {
                    echo $_SESSION["success"];
                    unset($_SESSION["success"]);
                }
                redirect('proposal/index');
            }
        }

        // proses membaca token pasca login
        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            // simpan token ke session
            $_SESSION['upload_token'] = $token;
        }
    }
}
