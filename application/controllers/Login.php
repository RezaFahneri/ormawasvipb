<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->Model('Model_login');
		// if($this->Login_Model->accountCheck() == true){
		// 	redirect('setup');
		// }
		// if($this->session->userdata('logged_in') == true){
		// 	redirect('welcome');
		// }
		if($this->session->userdata('logged_in') == true){
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['title']="Login | Ormawa SV IPB";
        $this->load->view('v_login',$data);

	}

	// public function aksilogin() {
	// 	$username = $this->input->post('username');
	// 	$password = md5($this->input->post('password'));

	// 	$cekuser = $this->Model_login->cekuser($username);
	// 	if ($cekuser){

	// 		$ceklogin = $this->Model_login->ceklogin($username,$password);

	// 		if ($ceklogin) {
	// 			foreach ($ceklogin as $row);

	// 			$this->session->set_userdata('username', $row->username);
	// 			$this->session->set_userdata('password', $row->password);
	// 			$this->session->set_userdata('status', $row->status);

	// 			redirect('beranda');

	// 		}else{
	// 			$this->session->set_flashdata('pesan', 'Username atau Password salah');
	// 			redirect('login');
	// 		}

	// 	}else{
	// 		$this->session->set_flashdata('pesan', 'Akun tidak terdaftar');
	// 			redirect('login');
	// 	}
	// }

	public function proseslogin(){
		$this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');
                $status = $this->input->post('status');  
                //Model function  
                $this->load->Model('Model_login');  
                if($this->Model_login->bisalogin($username, $password))  
                {  
                    //  $session_data = array(  
                    //       'username'     =>     $username,
					// 	  'password' => $password,
					// 	  'logged_in' => true,
					// 	  'status' => $status
                    //  );  
                    //  $this->session->set_userdata($session_data);  
                     redirect('beranda');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect('login');  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
	}
}
