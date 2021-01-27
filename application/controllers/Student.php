<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
		$this->load->view('student/header');
		$this->load->view('student/sidebar');
		$this->load->view('student/dashboard');
		$this->load->view('student/footer');
    }
    
    public function start_exam() {
        redirect('student/exam_instruction');
    }

    public function exam_instruction() {
        $this->load->view('student/header');
		$this->load->view('student/sidebar');
		$this->load->view('student/exam_instruction');
		$this->load->view('student/footer');
    }

    public function question_paper() {
        $this->load->view('student/header');
		$this->load->view('student/sidebar');
		$this->load->view('student/question_paper');
		$this->load->view('student/footer');
    }
}