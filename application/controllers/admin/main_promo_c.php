<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_promo_c extends CI_Controller {


	public function index()
	{
		$data['main_promo'] = $this->main_promo_m->get_main_promo();
		$this->template->load('admin/static_v','admin/main_promo_v',$data);
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/main_promo_m');
		$this->load->helper('url');
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function edit(){
		$id = $this->input->post('main-promo-id-input');
		$title = $this->input->post('main-promo-title-input');
		$desc = $this->input->post('main-promo-desc-input');
		$navbar = $this->input->post('main-promo-title-navbar-input');
		$type = "promo";

		$data = array(
			'main_content_id'			=> $id,
			'main_content_title'		=> $title,
			'main_content_desc' 		=> $desc,
			'main_content_title_navbar' => $navbar,
			'main_content_type' 		=> $type
			);
		$this->main_promo_m->edit_main_promo('mg_main_content',$data);
		
		redirect('admin/main_promo_c');
	}
}
