<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SEO_c extends CI_Controller {


	public function index()
	{
		$data['seo'] = $this->seo_m->get_seo();
		$this->template->load('admin/static_v','admin/seo_v',$data);
	}

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/seo_m');
		$this->load->helper('url');
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function edit(){
		$id = $this->input->post('seo-id-input');
		$author = $this->input->post('seo-author-input');
		$description = $this->input->post('seo-desc-input');
		$keyword = $this->input->post('seo-keyword-input');

		$data = array(
			'seo_id'			=> $id,
			'seo_author'		=> $author,
			'seo_description' 	=> $description,
			'seo_keyword' 		=> $keyword,

			);
		$this->seo_m->edit_seo('mg_seo',$data);
		
		redirect('admin/seo_c');
		
	}
}
