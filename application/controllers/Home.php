<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }
	public function index() {
		$this->load->view('index');
	}
	public function login_form() {
		echo "<pre>";
		print_r($_POST);die;
	}
	public function contact() {
		$this->load->view('general/header');
		$this->load->view('general/contact');
		$this->load->view('general/footer');
	}

	public function about() {
		$this->load->view('general/header');
		$this->load->view('general/about');
		$this->load->view('general/footer');
	}

	public function ByTechnology() {
		$this->load->view('general/header');
		$this->load->view('general/ByTechnology');
		$this->load->view('general/footer');
	}

	public function BySpecializations() {
		$this->load->view('general/header');
		$this->load->view('general/BySpecializations');
		$this->load->view('general/footer');
	}

	public function SkillDevelopment() {
		$this->load->view('general/header');
		$this->load->view('general/SkillDevelopment');
		$this->load->view('general/footer');
	}

	public function DigitalMarketing() {
		$this->load->view('general/header');
		$this->load->view('general/DigitalMarketing');
		$this->load->view('general/footer');
	}

	public function BusinessAnalytics() {
		$this->load->view('general/header');
		$this->load->view('general/BusinessAnalytics');
		$this->load->view('general/footer');
	}

	public function SoftwareConsulting() {
		$this->load->view('general/header');
		$this->load->view('general/SoftwareConsulting');
		$this->load->view('general/footer');
	}

	public function GovernmentProject() {
		$this->load->view('general/header');
		$this->load->view('general/GovernmentProject');
		$this->load->view('general/footer');
	}

	public function Education() {
		$this->load->view('general/header');
		$this->load->view('general/Education');
		$this->load->view('general/footer');
	}

	public function ResourceProcessOutsourcing() {
		$this->load->view('general/header');
		$this->load->view('general/ResourceProcessOutsourcing');
		$this->load->view('general/footer');
	}

	public function gallery() {
		$this->load->view('general/header');
		$this->load->view('general/gallery');
		$this->load->view('general/footer');
	}

	public function apply_for_certificate() {
		$this->load->view('general/header');
		$this->load->view('general/apply_for_certificate');
		$this->load->view('general/footer');
	}

	public function registration() {
		$this->load->view('general/header');
		$this->load->view('general/registration');
		$this->load->view('general/footer');
	}

	public function login() {
		$this->load->view('general/header');
		$this->load->view('general/login');
		$this->load->view('general/footer');
	}
}