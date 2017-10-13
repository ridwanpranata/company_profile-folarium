<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_benefit_c extends CI_Controller {


	public function index()
	{
		$data['main_benefit'] = $this->main_benefit_m->get_main_benefit();
		$this->template->load('admin/static_v','admin/main_benefit_v',$data);
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/main_benefit_m');
		$this->load->helper('url');
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function edit(){
		$id = $this->input->post('main-benefit-id-input');
		$title = $this->input->post('main-benefit-title-input');
		$desc = $this->input->post('main-benefit-desc-input');
		$type = "benefit";
		$data = array(
			'main_content_id' => $id,
			'main_content_title' => $title,
			'main_content_desc' => $desc,
			'main_content_type' => $type
			);
		$this->main_benefit_m->edit_main_benefit('mg_main_content',$data);
		
		redirect('admin/main_benefit_c');
	}
}
