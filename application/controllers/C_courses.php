<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_courses extends CI_Controller {

	public function  __construct() {
		parent:: __construct();
	}
	public function index() {
        if($this->session->userdata('username')) {
            $data['record_course'] = $this->m_courses->getcourses();
            $this->load->view("v_courses",$data);
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
            redirect('home/index');
        }
    }

    public function add_course() {
        if($this->input->post('submit') == 'Submit') {           
            $course = $this->input->post('course');
            $this->form_validation->set_rules('course','course','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong>'.validation_errors().'</div>');
                redirect('c_courses/add_course');
            } else {
                $data = array(
                    'c_name' => $course
                );
                $result = $this->m_courses->form_insert($data);
                if($result) {
                    $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success!</strong> Courses Added Successfully</div>');
                    redirect('c_courses/index');
                } else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong. Please Try Again</div>');
                    redirect('c_courses/index');
                }
            }
        } else {
              $this->load->view("v_addcourse");
        }
    }
    public function edit_course($id) {	
        $data['record_course'] = $this->m_courses->edit($id);
        $this->load->view("update_course",$data);

    }

    public function update_course() {
        if($this->input->post('submit') == 'Submit') {
            $id = $this->input->post('id');
            $course = $this->input->post('course');
            $this->form_validation->set_rules('course','course','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong>'.validation_errors().'</div>');
                redirect('c_courses/edit_course/'.$id);
            } else {
                $data = array(
                    'c_name' => $course
                );
                $this->m_courses->update($id,$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success!</strong> Courses Updated Successfully</div>');
                redirect('c_courses/index');
            }
            
        } else {
            $this->load->view('update_course');
        }
    }

    public function delete() {
        $id=$this->input->post("p_id");
        $this->load->model("m_courses");
        $this->m_courses->Delete($id);
    }
}
