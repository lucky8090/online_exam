<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_testpapers extends CI_Controller {
    public function  __construct() {
		parent:: __construct();
	}
	
	public function index() {
        if($this->session->userdata('username')) {
            $data['courses']=$this->m_testpapers->courses();
            $this->load->view("v_testpapers",$data);
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
            redirect('home/index');
        }
    }

    public function get_subjects(){
        $course_id = $_REQUEST['course_id'];
        $subjects=$this->m_testpapers->get_subjects($course_id);
        echo json_encode($subjects);
    }

    public function add_q_p() {
        if ($this->input->post('submit') == 'Submit') {  
            $q_p = $this->input->post('q_desc');
            $q_no = $this->input->post('q_no');
            $subject = $this->input->post('subject');
            $course = $this->input->post('course');
            $this->form_validation->set_rules('q_desc','q_desc','required|trim');
            $this->form_validation->set_rules('q_no','q_no','required|trim');
            $this->form_validation->set_rules('subject','subject','required|trim');
            $this->form_validation->set_rules('course','course','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>'.validation_errors().'</div>');
                redirect('c_testpapers/add_q_p');
            } else {
                $data = array(
                    'sub_id' => $subject,
                    'c_id' => $course,
                    'no_quests' => $q_no,
                    'q_describe' => $q_p
                );
                $result = $this->m_testpapers->form_insert($data);
                if($result) {
                    $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Question Details Added successfully.</div>');
                    redirect('c_testpapers/');
                } else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong .Please try Again.</div>');
                    redirect('c_testpapers/index');
                }
            }
        } else {
            $data['courses']=$this->m_testpapers->courses();
            $this->load->view("v_addtestpaper",$data);
        }
    }
     
    public function filter() {
        $c_id=$this->input->post('course');
        $sub_id=$this->input->post('subject');
        $this->form_validation->set_rules('course','course','required|trim');
        $this->form_validation->set_rules('subject','subject','required|trim');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>Please Select Course and Subjects .</div>');
            redirect('c_testpapers/index');
        } else {
            $data['record_qp']=$this->m_testpapers->getqp($c_id,$sub_id);   
            $data['courses']=$this->m_testpapers->courses();
            $this->load->view("v_testpapers",$data);
        }
    }
    
    public function edit_q_p($id){
        $data['number'] = $this->m_testpapers->edit($id);
        $data['courses']=$this->m_testpapers->courses();
        $this->load->view("update_testpaper",$data);

    }

        
    public function update_q_p() {
        if($this->input->post('submit') == 'Submit') {
            $id=$this->input->post('id');
            $subject=$this->input->post('subject');
            $course = $this->input->post('course');
            $q_p = $this->input->post('q_desc');
            $q_no = $this->input->post('q_no');
            $this->form_validation->set_rules('q_desc','q_desc','required|trim');
            $this->form_validation->set_rules('q_no','q_no','required|trim');
            $this->form_validation->set_rules('subject','subject','required|trim');
            $this->form_validation->set_rules('course','course','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>'.validation_errors().'</div>');
                redirect('c_testpapers/edit_q_p/'.$id);
            } else {
                $data = array(
                    'sub_id' => $subject,
                    'c_id' => $course,
                    'no_quests' => $q_no,
                    'q_describe' => $q_p
                );
                $this->m_testpapers->update($id,$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Questions Details Updated Successfully.</div>');
                redirect('c_testpapers/index');
            }
        } else {
            $this->load->view('view_ques_paper');
        }
    }

   public function delete()
		{
			$id=$this->input->post("p_id");
                       
                        $this->load->model("m_testpapers");
			$this->m_testpapers->Delete($id);
			
		}
}
