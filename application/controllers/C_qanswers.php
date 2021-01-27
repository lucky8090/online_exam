<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_qanswers extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();
	}
	public function index() {
        if($this->session->userdata('username')) {
            // $data['courses']=$this->m_qanswers->courses();
            $data['subjects']=$this->m_qanswers->subjects();
            $data['qp']=$this->m_qanswers->qp();
            $this->load->view("v_qanswers",$data);
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
            redirect('home/index');
        }
    }

    public function get_questions() {
        $id = $_GET['subject_id'];
        $questions=$this->m_qanswers->get_questions($id);
        echo json_encode($questions);
    }
                         
    public function add_quest_ans() {
        $data = array();
        if ($this->input->post('submit') == 'Submit') { 
            $sub_id = $this->input->post('subject');
            $question= $this->input->post('question');    
            $level= $this->input->post('level');    
            $ch1 = $this->input->post('ch1');
            $ch2 = $this->input->post('ch2');
            $ch3 = $this->input->post('ch3');
            $ch4 = $this->input->post('ch4');
            $answer = $this->input->post('answer');
            $this->form_validation->set_rules('subject','subject','required|trim');
            $this->form_validation->set_rules('question','question','required|trim');
            $this->form_validation->set_rules('level','level','required|trim');
            $this->form_validation->set_rules('ch1','ch1','required|trim');
            $this->form_validation->set_rules('ch2','ch2','required|trim');
            $this->form_validation->set_rules('ch3','ch3','required|trim');
            $this->form_validation->set_rules('ch4','ch4','required|trim');
            $this->form_validation->set_rules('answer','answer','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>'.validation_errors().'</div>');
                redirect('c_qanswers/add_quest_ans');
            } else {
                $data = array(
                    'sub_id' => $sub_id,
                    'exam_level' => $level,
                    'question' => $question,
                    'ch1' => $ch1,
                    'ch2' => $ch2,
                    'ch3' => $ch3,
                    'ch4' => $ch4,
                    'correct_ans' => $answer
                );
                $result = $this->m_qanswers->form_insert($data);
                if($result) {
                    $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Question Choice Added successfully.</div>');
                    redirect('c_qanswers/');
                } else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong .Please try Again.</div>');
                    redirect('c_qanswers/index');
                }
            }
        } else {
            $data['subjects'] = $this->m_qanswers->subjects();
            $this->load->view("v_addqanswer",$data);
        }
        
    }
         
    public function filter() {
        // $c_id=$this->input->post('course');
        // $qp_id=$this->input->post('ques_paper');
        $sub_id=$this->input->post('subject');
        // $this->form_validation->set_rules('course','course','required|trim');
        // $this->form_validation->set_rules('ques_paper','Question Paper','required|trim');
        $this->form_validation->set_rules('subject','subject','required|trim');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>Please Select The Fields .</div>');
            redirect('c_qanswers/index');
        } else {
            // $data['qa']=$this->m_qanswers->getqa($c_id,$sub_id,$qp_id);
            $data['qa']=$this->m_qanswers->getqa($sub_id);
            // echo "<pre>";
            // print_r($data['qa']);die;
            // $data['courses']=$this->m_qanswers->courses();
            $data['subjects']=$this->m_qanswers->subjects();
            $this->load->view("v_qanswers",$data);
        }
    }     
        
    public function edit_quest_ans($id) {
        $data['details'] = $this->m_qanswers->edit($id);
        $data['subjects']=$this->m_qanswers->subjects();
        // echo "<pre>";
        // print_r($data['subjects']);die;
        $data['courses']=$this->m_qanswers->courses();
        $this->load->view("update_qanswer",$data);

    }
        
    public function update_quest_ans() {
        $data = array();
        if($this->input->post('submit') == 'Submit') {
            $id=$this->input->post('id');
            $question= $this->input->post('question');    
            $level= $this->input->post('level');    
            $ch1 = $this->input->post('ch1');
            $ch2 = $this->input->post('ch2');
            $ch3 = $this->input->post('ch3');
            $ch4 = $this->input->post('ch4');
            $answer = $this->input->post('answer');
            $sub_id = $this->input->post('subject');
            // $c_id = $this->input->post('course');
            // $qp_id = $this->input->post('ques_paper');
            // $this->form_validation->set_rules('ques_paper','ques_paper','required|trim');
            // $this->form_validation->set_rules('course','course Paper','required|trim');
            $this->form_validation->set_rules('subject','subject','required|trim');
            $this->form_validation->set_rules('question','question','required|trim');
            $this->form_validation->set_rules('level','level','required|trim');
            $this->form_validation->set_rules('ch1','ch1','required|trim');
            $this->form_validation->set_rules('ch2','ch2','required|trim');
            $this->form_validation->set_rules('ch3','ch3','required|trim');
            $this->form_validation->set_rules('ch4','ch4','required|trim');
            $this->form_validation->set_rules('answer','answer','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>'.validation_errors().'</div>');
                redirect('c_qanswers/edit_quest_ans/'.$id);
            } else {
                $data = array(
                    // 'qp_id' => $qp_id,
                    // 'c_id' => $c_id,
                    'sub_id' => $sub_id,
                    'exam_level' => $level,
                    'question' => $question,
                    'ch1' => $ch1,
                    'ch2' => $ch2,
                    'ch3' => $ch3,
                    'ch4' => $ch4,
                    'correct_ans' => $answer,
                );
                $result = $this->m_qanswers->update($id,$data);
                if($result) {
                    $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Questions Details Updated Successfully.</div>');
                    redirect('c_qanswers/index');
                } else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong! </strong> Something Went Wrong.</div>');
                    redirect('c_qanswers/index');
                }
            }
        } else {
            $this->load->view('view_quest_ans');
        }
    }
         
    public function delete() {
        $id=$this->input->post("p_id");
        $this->load->model("m_qanswers");
        $this->m_qanswers->Delete($id);
    }
}
?>