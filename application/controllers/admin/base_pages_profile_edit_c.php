<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_pages_profile_edit_c extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('admin/base_pages_profile_edit_m');
		$this->load->helper(array('form', 'url'));
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function index()
	{
		$data['userprofile'] = $this->base_pages_profile_edit_m->get_user_profile();
		$this->template->load('admin/static_v','admin/base_pages_profile_edit_v',$data);
	}


	public function edit(){


		$config['upload_path']          = './assets/admin/img/user/';
		$config['allowed_types']        = 'png|jpg';
		$config['max_size']      = '200000';

		$this->load->library('upload');
		$this->upload->initialize($config);

		$id 	= $this->input->post('user-id-input');
		$fname 	= $this->input->post('user-fname-input');
		$lname 	= $this->input->post('user-lname-input');
		$email 	= $this->input->post('user-email-input');
		$bio 	= $this->input->post('user-bio-input');
		$phone 	= $this->input->post('user-phone-input');
		$line 	= $this->input->post('user-line-input');
		$pinbb 	= $this->input->post('user-pinbb-input');


		$password 				= $this->input->post('profile-password');
		$password_new 			= $this->input->post('profile-password-new');
		$password_new_confirm 	= $this->input->post('profile-password-new-confirm');

		if($password_new == $password_new_confirm){
			$where = array(
				'user_id' => $id,
				'user_pass' => $password	
				);

			$check = $this->base_pages_profile_edit_m->check_password('md_user',$where)->num_rows();

			// num row untuk menghitung jumlah barisnya yang cocok
			
			if($check > 0){

				$data = array(
					'user_pass' => $password_new,
					);
				$this->base_pages_profile_edit_m->edit_password('md_user',$data,$id);
				redirect('admin/base_pages_profile_edit_c');

			} else {
				echo "Maaf, Password lama yang anda masukkan salah";
				$this->session->set_flashdata('wrongpass','Maaf, Password lama yang anda masukkan salah');
				redirect('admin/base_pages_profile_edit_c');
			}
		} else {
			$this->session->set_flashdata('notmatch','Password Tidak sama dengan confirm');
			redirect('admin/base_pages_profile_edit_c');
		}


		if ( ! $this->upload->do_upload('user-pict-input'))
		{
			if(!empty($_FILES['user-pict-input']['name'])){

			} else {
				
			}

		}
		else
		{

			$filename=$this->upload->data('file_name');
			$datapict = array(
				'user_pict' => $filename
			);
			$this->base_pages_profile_edit_m->edit_profile_picture('md_user',$datapict,$id);
		}

		$data = array(
			'user_fname' => $fname,
			'user_lname' => $lname,
			'user_email' => $email,
			'user_bio' => $bio,
			'user_phone' => $phone,
			'user_line' => $line,
			'user_pinbb' => $pinbb,
			);

		$this->base_pages_profile_edit_m->edit_profile('md_user',$data,$id);

		redirect('admin/base_pages_profile_edit_c');


	}

	public function edit_pass(){
		$password 				= $this->input->post('profile-password');
		$password_new 			= $this->input->post('profile-password-new');
		$password_new_confirm 	= $this->input->post('profile-password-new-confirm');

		echo $password;
		echo $password_new;
		echo $password_new_confirm;
		exit(0);
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
