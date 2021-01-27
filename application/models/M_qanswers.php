
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_qanswers extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function form_insert($data) {
        return $this->db->insert('questions', $data);
    }
        
    public function qp() {
        return $this->db->query("select * from ques_paper");
    }
                
    public function courses() {
        $result =  $this->db->get("courses");
        return $result->result_array();
    }
    public function get_questions($id) {
        $result = $this->db->get_where('ques_paper', ['sub_id' => $id]);
        return $result->result_array();
    }
    
    public function subjects()
    {
        $result =  $this->db->query("select * from subjects");
        return $result->result_array();
    }
            
    public function getcourses($c_id)
    {
        return $this->db->query("select * from courses where c_id='$c_id'");
    }
            
    public function getsubjects($sub_id)
    {
        $result =  $this->db->query("select * from subjects where sub_id='$sub_id'");
        return $result->result_array();
    }
                
    public function getqa($sub_id) {
        // $result = $this->db->get_where('questions', array('c_id' => $c_id, 'sub_id' => $sub_id, 'qp_id' => $qp_id));
        $result = $this->db->get_where('questions', array('sub_id' => $sub_id));
        return $result->result_array();
    }
                
    public function edit($id) {	
        $this->db->select('q.*,s.sub_name'); 
        $this->db->from('questions as q');
        $this->db->where('q.q_id', $id);
        $this->db->join('subjects as s', 's.sub_id = q.sub_id'); 
        // $this->db->join('ques_paper as qp', 'qp.qp_id = q.qp_id'); 
        $query = $this->db->get();
        return $query->result_array();
	}
        
    public function ans($id)
    {
        return $this->db->query("select * from questions where q_id='$id'");
    }
        
    public function update($id,$data) {
        $this->db->where('q_id', $id);
        $result = $this->db->update('questions', $data);
        return $result;
	}          
    public function Delete($id)
	{       
		$this->db->query("delete from questions where q_id=$id");
    }
    
    public function get_reasoning_random_questions( $reasoning_q) {
        $result = $this->db->order_by('rand()')->limit($reasoning_q)->get_where('questions', ['sub_id' => 7]);
        return $result->result_array();
    }
    public function get_easy_random_questions($sub_id, $easy_q) {
        $result = $this->db->order_by('rand()')->limit($easy_q)->get_where('questions', ['sub_id' => $sub_id, 'exam_level' => 1]);
        return $result->result_array();
    }

    public function get_medium_random_questions($sub_id, $medium_q) {
        $result = $this->db->order_by('rand()')->limit($medium_q)->get_where('questions', ['sub_id' => $sub_id, 'exam_level' => 2]);
        return $result->result_array();
    }

    public function get_high_random_questions($sub_id, $hard_q) {
        $result = $this->db->order_by('rand()')->limit($hard_q)->get_where('questions', ['sub_id' => $sub_id, 'exam_level' => 3]);
        return $result->result_array();
    }                                                 
                
}
