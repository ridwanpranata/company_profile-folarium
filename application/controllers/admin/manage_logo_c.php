<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_logo_c extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('admin/manage_logo_m');
		$this->load->helper(array('form', 'url'));
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function index()
	{
		$data['logo'] = $this->manage_logo_m->getlogo();
		$this->template->load('admin/static_v','admin/manage_logo_v',$data);
	}

	public function delete(){
		$id = $_REQUEST['content_list_id'];
		$this->manage_logo_m->deleteList($id);
		redirect('admin/manage_logo_c');
	}

	public function edit(){


		$config['upload_path']          = './assets/admin/img/header/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      = '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);




		if ( ! $this->upload->do_upload('logo-pict-input'))
		{
			if(!empty($_FILES['logo-pict-input']['name'])){

				$error = array('error'=>"<p style='color: red'>".strip_tags($this->upload->display_errors())."</p>");

	                // $error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error',$error['error']);
			}
				// redirect('manage_logo_c');

		}
		else
		{
			$filename=$this->upload->data('file_name');
		}


		$id = $this->input->post('logo-id-input');
		$title = $this->input->post('logo-title-input');
		$desc = $this->input->post('logo-desc-input');

		$data = array(
			'content_header_title' => $title,
			'content_header_desc' => $desc,
			'content_header_pict' => $filename
			);

		$this->manage_logo_m->edit_logo('mg_content_header',$data,$id);

		redirect('admin/manage_logo_c');


	}
}
