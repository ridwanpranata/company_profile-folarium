<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_header_c extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('admin/manage_header_m');
		$this->load->helper(array('form', 'url'));
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function index()
	{
		$data['header'] = $this->manage_header_m->getHeader();
		$data['listHeader'] = $this->manage_header_m->getList();
		$this->template->load('admin/static_v','admin/manage_header_v',$data);
	}

	public function delete(){
		$id = $_REQUEST['content_list_id'];
		$this->manage_header_m->deleteList($id);
		redirect('admin/manage_header_c');
	}

	public function edit(){

		$config['upload_path']          = './assets/admin/img/header/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']      		= '10000';

		$this->load->library('upload');
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('header-pict-input'))
		{

		}
		else
		{
			$filename=$this->upload->data('file_name');
		}


		$id = $this->input->post('header-id-input');
		$title = $this->input->post('header-title-input');
		$desc = $this->input->post('header-desc-input');
		$list_header = $this->input->post('header-list-input[]');
		

		$data = array(
			'content_header_title' => $title,
			'content_header_desc' => $desc,
			'content_header_pict' => $filename
			);

		$this->manage_header_m->edit_main_header('mg_content_header',$data,$id);

		foreach($list_header as $key=> $n){

		    $this->manage_header_m->add_list_header('mg_content_list',$list_header[$key]);
		}

		redirect('admin/manage_header_c');


	}
}
