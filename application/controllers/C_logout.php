<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_logout extends CI_Controller {
	public function index()
	{
		$data= array();
	 	$this->session->sess_destroy();
	 	$this->session->unset_userdata('std_email');
	 	redirect('home/index');
	}
}
