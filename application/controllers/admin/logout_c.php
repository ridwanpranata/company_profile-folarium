<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_c extends CI_Controller {

	// Load model
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{	
		$this->session->sess_destroy();
		redirect('admin/login_c','refresh');
	}

	
}
