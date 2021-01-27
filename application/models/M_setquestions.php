<?php if ( ! defined('BASEPATH')) {exit('No direct script access allowed');}

class M_setquestions extends CI_Model
{
    function __construct(){
		parent::__construct();
    }

    public function add_questions_details($data) {
        return $this->db->insert("questions_details", $data);
    }

    public function update_questions_details($data,$id) {
        $this->db->where('id', $id);
        $result = $this->db->update('questions_details', $data);
        return $result;
    }

    public function check_easy_questions() {
        $this->db->select_min('count');
        $this->db->from('view_questions_count');
        $this->db->where(array('exam_level' => 1, 'sub_id !=' => 7));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function check_medium_questions() {
        $this->db->select_min('count');
        $this->db->from('view_questions_count');
        $this->db->where(array('exam_level' => 2, 'sub_id !=' => 7));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function check_high_questions() {
        $this->db->select_min('count');
        $this->db->from('view_questions_count');
        $this->db->where(array('exam_level' => 3, 'sub_id !=' => 7));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function check_reasoning_questions() {
        $this->db->select('*');
        $this->db->from('questions');
        $this->db->where(array('sub_id=' => 7));
        $query = $this->db->get();
        return $query;
    }
    public function check_record() {
        $result = $this->db->query("select * from questions_details");
        return $result->result_array();
    }

}