<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_adminhome extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();
        $this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->session->userdata('username')) {
			$this->load->view('v_adminhome');
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong! </strong> You May Login First .</div>');
    		redirect('home/index');
		}
	}
}
