<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$check = $this->session->userdata('status');
		if($check != "login"){
			redirect('admin/login_c');
		}
	}

	public function index()
	{
		$this->template->load('admin/static_v','admin/dashboard_v');
	}
}
