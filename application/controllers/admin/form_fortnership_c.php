<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_fortnership_c extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('admin/form_fortnership_m');
		$this->load->helper(array('form', 'url'));
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function index()
	{
		$data['fortnership'] = $this->form_fortnership_m->getDataFortnership();
		$this->template->load('admin/static_v','admin/form_fortnership_v',$data);
	}

	public function add(){

		$config['upload_path']          = './assets/admin/img/fortnership/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('addfortnership-pict-input'))
		{
			$error = array('error'=>"<p style='color: red'>".strip_tags($this->upload->display_errors())."</p>");
			$this->session->set_flashdata('error',$error['error']);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$filename=$this->upload->data('file_name');
			$title = $this->input->post('addfortnership-title-input');
			$desc = $this->input->post('addfortnership-desc-input');
			$pict = $filename;


			$data = array(
				'content_fortnership_title' => $title,
				'content_fortnership_desc' => $desc,
				'content_fortnership_pict' => $pict
				);

			$this->form_fortnership_m->addfortnership('mg_content_fortnership',$data);
			
			redirect('admin/form_fortnership_c');
		}
	}

	public function edit(){

		$config['upload_path']          = './assets/admin/img/fortnership/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('fortnership-pict-input'))
		{
			if(!empty($_FILES['fortnership-pict-input']['name'])){
				$error = array('error'=>"<p style='color: red'>".strip_tags($this->upload->display_errors())."</p>");
				$this->session->set_flashdata('error',$error['error']);
			}
			$data = array('upload_data' => $this->upload->data());
			$id = $this->input->post('fortnership-id-input');
			$title = $this->input->post('fortnership-title-input');
			$desc = $this->input->post('fortnership-desc-input');

			$data = array(
				'content_fortnership_title' => $title,
				'content_fortnership_desc' => $desc,
				);
			

			$this->form_fortnership_m->edit_fortnership('mg_content_fortnership',$data,$id);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$id = $this->input->post('fortnership-id-input');
			$title = $this->input->post('fortnership-title-input');
			$desc = $this->input->post('fortnership-desc-input');
			$filename=$this->upload->data('file_name');
			$data = array(
				'content_fortnership_title' => $title,
				'content_fortnership_desc' => $desc,
				'content_fortnership_pict' => $filename,
				);
			$this->form_fortnership_m->edit_fortnership('mg_content_fortnership',$data,$id);

		}
		redirect('admin/form_fortnership_c');
	}

	public function delete(){
		$id = $_REQUEST['content_fortnership_id'];
		$this->form_fortnership_m->deletefortnership($id);
		redirect('admin/form_fortnership_c');
	}
}
