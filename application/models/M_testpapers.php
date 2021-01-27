<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_testpapers extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function form_insert($data) {
       return $this->db->insert('ques_paper', $data);
    }
    public function getrecord() {
			return $this->db->query("select * from ques_paper");
    }
    public function courses() {
        $result =  $this->db->get("courses ");
        return $result->result_array();
    }

    public function subjects() {
        $result =  $this->db->get("subjects");
        return $result->result_array();
    }
    
    public function get_subjects($course_id) {
        $result = $this->db->get_where('subjects', array('c_id' => $course_id));
        return $result->result_array();
    }
            
        public function getcourses($c_id)
    {
        return $this->db->query("select * from courses where c_id='$c_id'");
    }
            
    public function getsubjects($sub_id) {
        return $this->db->query("select * from subjects where sub_id='$sub_id'");
    }
            
    public function getqp($c_id,$sub_id) {
        $result = $this->db->get_where('ques_paper', array('c_id' => $c_id, 'sub_id' => $sub_id));
        return $result->result_array();
    }
            
    public function edit($id) {	
        $this->db->select('q.*,s.sub_name'); 
        $this->db->from('ques_paper as q');
        $this->db->where('q.qp_id', $id);
        $this->db->join('subjects as s', 's.sub_id = q.sub_id'); 
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function update($id,$data) {
        $this->db->where('qp_id', $id);
        $this->db->update('ques_paper', $data);
	}
        
    public function Delete($id) {       
        $this->db->query("delete from ques_paper where qp_id=$id");
	}
                
}
