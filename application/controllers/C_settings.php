<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_settings extends CI_Controller {
public function  __construct()
	{
		parent:: __construct();
                $this->load->database();
		$this->load->library('session');
		if($this->session->has_userdata('bussiness_name') == NULL)
		{
			redirect(base_url()."c_login");
		}
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('v_settings');
	}
}
