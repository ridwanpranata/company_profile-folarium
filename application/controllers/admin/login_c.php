<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

	public function index()
	{	
		if ($this->session->userdata('status') == "login") {
			redirect('admin/manage_product_c');
		} else {
			$this->load->view('admin/login_v');
		}
		
	}

	// Load model
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/login_m');
	}


	// Cek login
	public function login(){
		$username = $this->input->post('login-username');
		$password = $this->input->post('login-password');

		$where = array(
			'user_username' => $username,
			'user_pass' => $password	
			);

		$check = $this->login_m->login_data('md_user',$where)->num_rows();
		// num row untuk menghitung jumlah barisnya
		// cek apakah ada yang cocok
		
		if($check > 0){
			$data_session = array(
					'user_username' => $username, //nyimpan data username ke dalam session
					'status' => "login"  // Bisa jadi alternatif
				);
			$this->session->set_userdata($data_session);

			redirect('admin/manage_product_c');
		} else {

			$this->session->set_flashdata('gagallogin','Maaf, Username atau Password yang anda masukkan salah');
			redirect('admin/login_c');
			
		}

	}
}
