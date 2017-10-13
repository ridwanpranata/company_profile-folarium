<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_product_c extends CI_Controller {


	public function index()
	{
		$data['mainproduct'] = $this->main_product_m->getMainDetail_Demo();
		$this->template->load('admin/static_v','admin/main_product_v',$data);
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/main_product_m');
		$this->load->helper('url');
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function edit(){
		$id = $this->input->post('mainproduct-id-input');
		$title = $this->input->post('mainproduct-title-input');
		$desc = $this->input->post('mainproduct-desc-input');
		$type = "product_demo";

		$data = array(
			'main_content_id' => $id,
			'main_content_title' => $title,
			'main_content_desc' => $desc,
			'main_content_type' => $type,

			);
		$this->main_product_m->edit_detail_demo('mg_main_content',$data);
		
		redirect('admin/main_product_c');
		
	}
}
