<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Plans extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();
	}
	public function index()
        {
            if($this->session->userdata('username')) {
                $data['record_plans'] = $this->m_plans->getplans();
                $this->load->view("v_plans",$data);
            } else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
                redirect('home/index');
            }
        }
         
        public function add_plan() {
            if($this->input->post('submit') == 'Submit') {      
                $data = array();     
                $plan = $this->input->post('plan');
                $amount = $this->input->post('amount');
                $duration = $this->input->post('duration');
                $this->form_validation->set_rules('plan','plan','required|trim');
		        $this->form_validation->set_rules('amount','amount','required|trim');
                $this->form_validation->set_rules('duration','duration','required|trim');
                if($this->form_validation->run() == FALSE){
                    $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong>'.validation_errors().'</div>');
                    redirect('c_plans/add_plan');
                } else {
                    $data = array(
                        'p_name' => $plan,
                        'p_price' => $amount,
                        'p_duration' => $duration
                    );
                    $result = $this->m_plans->form_insert($data);
                    if($result) {
                        $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> plan has added successfully.</div>');
                        redirect('c_plans/index');
                    } else {
                        $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong .Please try Again.</div>');
                        redirect('c_plans/index');
                    }
                }
            } else {
                $this->load->view("v_addplan");
            }
        }
        public function edit_plan($id) {
            $data['record_plans'] = $this->m_plans->edit($id);
            $this->load->view("update_plan",$data);
        }

    public function update_plan() {
        $data = array();   
        if($this->input->post('submit') == 'Submit') {
            $id=$this->input->post('id');
            $plan = $this->input->post('plan');
            $amount = $this->input->post('amount');
            $duration = $this->input->post('duration');
            $this->form_validation->set_rules('plan','plan','required|trim');
            $this->form_validation->set_rules('amount','amount','required|trim');
            $this->form_validation->set_rules('duration','duration','required|trim');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong>'.validation_errors().'</div>');
                redirect('c_plans/edit_plan/'.$id);
            } else {
                $data = array(
                    'p_name' => $plan,
                    'p_price' => $amount,
                    'p_duration' => $duration
                );
                $this->m_plans->update($id,$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success! </strong> Plans Updated Successfully.</div>');
                redirect('c_plans/index');
            }
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> Something Went Wrong .Please try Again.</div>');
            redirect('c_plans/index');
        }
    }

         
    public function delete() {
        $id=$this->input->post("p_id");
        $this->load->model("m_plans");
        $this->m_plans->Delete($id);
    }
         
         
    }       
        
