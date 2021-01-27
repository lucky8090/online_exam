<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_students extends CI_Controller {

	public function  __construct() {
		parent:: __construct();
	}
	public function index() {
        if($this->session->userdata('username')) {
            $data['record_courses'] = $this->m_subjects->getcourses();
            $this->load->view('v_students',$data);
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
            redirect('home/index');
        }
    }

    public function sel_course() {
        $id=$this->input->post('course');
        $this->form_validation->set_rules('course','course','required|trim');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>Please Select Course .</div>');
            redirect('c_students/index');
        } else {
            $data['record']=$this->m_students->getrecord($id);
            $data['record_courses'] = $this->m_subjects->getcourses();
            $this->load->view("v_students",$data);
        }
    }
    
    
    public function add_student() {
        
        if($this->input->post('submit') == 'Submit') {
            $name=$this->input->post('name');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $course = $this->input->post('course');
            $plan = $this->input->post('plan');
            $fname = $this->input->post('fname');
            $dob = $this->input->post('dob');
            $this->form_validation->set_rules('name','name','required|trim');
            $this->form_validation->set_rules('password','password','required|trim');
            $this->form_validation->set_rules('email','email','required|trim');
            $this->form_validation->set_rules('mobile','mobile','required|trim');
            $this->form_validation->set_rules('address','address','required|trim');
            $this->form_validation->set_rules('course','course','required|trim');
            $this->form_validation->set_rules('plan','plan','required|trim');
            $this->form_validation->set_rules('fname','fname','required|trim');
            $this->form_validation->set_rules('dob','dob','required|trim');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>'.validation_errors().' .</div>');
            redirect('c_students/add_student');
        } else {
            $data = array(
                'std_name' => $name,
                'std_pass' => $password,
                'std_email' => $email,
                'std_mob' => $mobile,
                'std_home' => $address,
                'course' => $course,
                'plan' => $plan,
                'father_name' => $fname,
                'dob' => $dob,
            );
            $result = $this->m_students->form_insert($data);
            if($result) {
                $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Student Added successfully.</div>');
                redirect('c_students/');
            } else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong .Please try Again.</div>');
                redirect('c_students/index');
            }
        }
        } else {
            $data['record_courses'] = $this->m_subjects->getcourses();
            $data['record_plans'] = $this->m_students->getplans();
            $this->load->view('v_addstudent',$data);
        }
    }
    

    public function edit_student($id) {	
        $data['record'] = $this->m_students->edit($id);
        $data['record_courses'] = $this->m_subjects->getcourses();
        $data['record_plans'] = $this->m_students->getplans();
        $this->load->view("update_student",$data);

    }

    public function update_student() {
        
        if($this->input->post('submit') == 'Submit') {
            $id=$this->input->post('id');
            $name=$this->input->post('name');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $course = $this->input->post('course');
            $plan = $this->input->post('plan');
            $fname = $this->input->post('fname');
            $dob = $this->input->post('dob');
            $this->form_validation->set_rules('name','name','required|trim');
            $this->form_validation->set_rules('password','password','required|trim');
            $this->form_validation->set_rules('email','email','required|trim');
            $this->form_validation->set_rules('mobile','mobile','required|trim');
            $this->form_validation->set_rules('address','address','required|trim');
            $this->form_validation->set_rules('course','course','required|trim');
            $this->form_validation->set_rules('plan','plan','required|trim');
            $this->form_validation->set_rules('fname','fname','required|trim');
            $this->form_validation->set_rules('dob','dob','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>'.validation_errors().' .</div>');
                redirect('c_students/edit_student/'.$id);
            } else {
                $data = array(
                    'std_name' => $name,
                    'std_pass' => $password,
                    'std_email' => $email,
                    'std_mob' => $mobile,
                    'std_home' => $address,
                    'course' => $course,
                    'plan' => $plan,
                    'father_name' => $fname,
                    'dob' => $dob,
                );
                $this->m_students->update($id,$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Student Details Updated Successfully.</div>');
                redirect('c_students/index');
            }
        } else {
            $this->load->view('view_student');
        }
    }

        public function delete()
		{
			$id=$this->input->post("p_id");
                       
                        $this->load->model("m_students");
			$this->m_students->Delete($id);
		}

}
