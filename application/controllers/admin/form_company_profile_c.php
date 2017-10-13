<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_company_profile_c extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('admin/form_company_profile_m');
		$this->load->helper(array('form', 'url'));
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function index()
	{
		$data['comprofile'] = $this->form_company_profile_m->getCompanyProfile();
		$data['list'] = $this->form_company_profile_m->get_list();
		$this->template->load('admin/static_v','admin/form_company_profile_v',$data);
	}

	public function delete(){
		$id = $_REQUEST['content_list_id'];
		$this->form_company_profile_m->deleteList($id);
		redirect('admin/form_company_profile_c');
	}

	public function edit(){


		$config['upload_path']          = './assets/admin/file/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']      = '20000';

		$this->load->library('upload');
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('cp-pdf-input'))
		{
			if(!empty($_FILES['cp-pdf-input']['name'])){
		}

		}
		else
		{
			$filename=$this->upload->data('file_name');
		}


		$id = $this->input->post('cp-id-input');
		$title = $this->input->post('cp-title-input');
		$desc = $this->input->post('cp-desc-input');
		$subtitle = $this->input->post('cp-subtitle-input');
		$subdesc = $this->input->post('cp-subdesc-input');
		$list_subdesc = $this->input->post('cp-list_subdesc-input[]');
		

		$data = array(
			'content_title' => $title,
			'content_desc' => $desc,
			'content_sub_title' => $subtitle,
			'content_sub_desc' => $subdesc,
			'content_proposal' => $filename
			);

		$this->form_company_profile_m->edit_company_profile('mg_content',$data,$id);

		foreach($list_subdesc as $key=> $n){

		    $this->form_company_profile_m->edit_company_profile_list('mg_content_list',$list_subdesc[$key]);
		}

		redirect('admin/form_company_profile_c');


	}
}
