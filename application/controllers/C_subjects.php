<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_subjects extends CI_Controller {
    public function  __construct() {
		parent:: __construct();
	}
	
	public function index() {
        if($this->session->userdata('username')) {
            // $id=$this->input->post('course');
            $data['record']=$this->m_subjects->getrecord();		
            // $data['record_courses'] = $this->m_subjects->getcourses();  
            // $data['record_subjects'] = $this->m_subjects->getsubjects();
            $this->load->view("v_subjects",$data);
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
            redirect('home/index');
        }
    }

    public function add_subject() {
        if($this->input->post('submit') == 'Submit') {
            $subject = $this->input->post('subject');
            // $c_id = $this->input->post('course');
            $this->form_validation->set_rules('subject','subject','required|trim');
            // $this->form_validation->set_rules('course','course','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong>'.validation_errors().'</div>');
                redirect('c_subjects/add_subject');
            } else {
                $data = array(
                    // 'c_id' => $c_id,
                    'sub_name' => $subject
                );
                $result = $this->m_subjects->form_insert($data);
                if($result) {
                    $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Subjects Added successfully.</div>');
                    redirect('c_subjects/');
                } else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong .Please try Again.</div>');
                    redirect('c_subjects/index');
                }
            }
        } else {
		    $data['record_courses'] = $this->m_subjects->getcourses();    
            $this->load->view("v_addsubject",$data);
        }
    }
    
    public function sel_course() {
        $id=$this->input->post('course');
        $this->form_validation->set_rules('course','course','required|trim');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>Please Select Course .</div>');
            redirect('c_subjects/index');
        } else {
            $data['record']=$this->m_subjects->getrecord($id);
            $data['record_courses'] = $this->m_subjects->getcourses();  
            $this->load->view("v_subjects",$data);
        }
    }

    public function edit_subject($id) {
        $data['record'] = $this->m_subjects->edit($id);
        $data['record_courses'] = $this->m_subjects->getcourses();
        echo "<pre>";
        print_r($data['record_courses']);die;
        $this->load->view("update_subject",$data);
        
    }

    
    public function update_subject() {
        
        if($this->input->post('submit') == 'Submit') {
            $id=$this->input->post('id');
            $subject=$this->input->post('subject');
            // $course = $this->input->post('course');
            $this->form_validation->set_rules('subject','subject','required|trim');
            // $this->form_validation->set_rules('course','course','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong>'.validation_errors().'</div>');
                redirect('c_subjects/edit_subject/'.$id);
            } else {
                $data = array(
                    'sub_name' => $subject,
                    // 'c_id' => $course
                );
                $this->m_subjects->update($id,$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Subjects Updated Successfully.</div>');
                redirect('c_subjects/index');
            }
        } else {
            $this->load->view('v_subjects');
        }
    }
            
            
            
   public function delete()
		{
			$id=$this->input->post("p_id");
                       
                        $this->load->model("m_subjects");
			$this->m_subjects->Delete($id);
			
		}
}
