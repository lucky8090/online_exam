<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_questionset extends CI_Controller {

    public function  __construct() { 
		parent:: __construct();
    }
    
    public function index() {
        if($this->session->userdata('username')) {
            $this->load->view("v_set_questions");
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
            redirect('home/index');
        }
    }
    public function add_question_details() {
        $reasoning = $this->input->post('reasoning');
        $easy = $this->input->post('easy');
        $medium = $this->input->post('medium');
        $high = $this->input->post('high');
        $negative_marking = $this->input->post('negative_marking');
        $marking_type = $this->input->post('marking_type');
        $this->form_validation->set_rules('reasoning','reasoning','required|trim');
        $this->form_validation->set_rules('easy','easy','required|trim');
        $this->form_validation->set_rules('medium','medium','required|trim');
        $this->form_validation->set_rules('high','high','required|trim');
        $this->form_validation->set_rules('negative_marking','negative_marking','required|trim');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!&nbsp;</strong>'.validation_errors().'</div>');
            redirect('c_questionset/index');
        } else {
            $reasoning_questions = $this->m_setquestions->check_reasoning_questions();
            $easy_questions = $this->m_setquestions->check_easy_questions();
            $medium_questions = $this->m_setquestions->check_medium_questions();
            $high_questions = $this->m_setquestions->check_high_questions();
            $easy_count_id = $easy_questions[0]['count'];
            $medium_count_id = $medium_questions[0]['count'];
            $high_count_id = $high_questions[0]['count'];
            if($reasoning > $reasoning_questions->num_rows()) {
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong! </strong>Reasoning questions value exceeds</div>');
                redirect('c_questionset/index');
            } 
            else if($easy > $easy_count_id) {
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong! </strong>Easy questions value exceeds</div>');
                redirect('c_questionset/index');
            } 
            else if($medium > $medium_count_id) {
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong! </strong>Medium questions value exceeds</div>');
                redirect('c_questionset/index');
            }
            else if($high > $high_count_id) {
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong! </strong>Medium questions value exceeds</div>');
                redirect('c_questionset/index');
            }
            else {
                if($negative_marking == 1) {
                   $data = array(
                       'reasoning' => $reasoning,
                       'easy' => $easy,
                       'medium' => $medium,
                       'high' => $high,
                       'negative_marking' => $negative_marking,
                       'neg_marking_value' => $marking_type
                   );
               } else {
                   $data = array(
                       'reasoning' => $reasoning,
                       'easy' => $easy,
                       'medium' => $medium,
                       'high' => $high,
                       'negative_marking' => $negative_marking,
                       'neg_marking_value' => 0
                   );
               }
               $get_record = $this->m_setquestions->check_record();
               if(count($get_record) == 0) {
                   $result = $this->m_setquestions->add_questions_details($data);
               } else {
                    $result = $this->m_setquestions->update_questions_details($data, $get_record[0]['id']);
               }
               if($result) {
                   $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Question Details Added successfully.</div>');
                   redirect('c_questionset/index');
               } else {
                   $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong .Please try Again.</div>');
                   redirect('c_questionset/index');
               }
            }
        }
    }
}