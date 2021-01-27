<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	public function index() {
		$data = array();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','UserName','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong>'.validation_errors().'</div>');
            redirect('home/index');
		} else {
			$con = array(
				'username' => $username,
				//
				'password' => md5($password)
			);
			$chklogin = $this->m_students->admin_login($con);
			$this->session->set_userdata($chklogin[0]);
			if(!empty($chklogin)) {
				redirect('c_adminhome/index');
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Invalid Username or Password .</div>');
                redirect('home/index');
			}
		}
	}
}
