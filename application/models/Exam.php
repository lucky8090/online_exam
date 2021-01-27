<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Exam extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->column_order = array(null, 'a.student_id','date', 'b.std_name');
        $this->column_search = array('a.student_id','date', 'b.std_name');
        $this->order = array('date' => 'desc');
    }

    public function save_questions($insert_data) {
        return $this->db->insert("exam", $insert_data);
    }

    public function get_questions($student_id, $date) {
        $result = $this->db->select('*')->get_where('exam', ['student_id' => $student_id, 'date' => $date]);
        return $result->result_array();
    }

    public function get_question_details($question) {
        $result = $this->db->select('*')->get_where('questions', ['q_id' => $question, 'sub_id' => 7]);
        return $result->result();
    }
    public function get_question($ques_id) {
        $result = $this->db->select('sub_id')->get_where('questions', ['q_id' => $ques_id]);
        return $result->result();
    }
    public function get_question_level($ques_id) {
        $result = $this->db->select('exam_level')->get_where('questions', ['q_id' => $ques_id]);
        return $result->result();
    }
    public function get_sutudent_report($student_id) {
        $result = $this->db->select('*')->get_where('exam', ['student_id' => $student_id, 'student_answers !=' => '']);
        return $result->result();
    }
    
    public function check_question_ans($ques_id) {
        $result = $this->db->select('correct_ans')->get_where('questions', ['q_id' => $ques_id]);
        return $result->result_array();
    }
    public function get_exam_details($exam_id) {
        $this->db->from('exam as a');
        $this->db->join('student_details as b', 'b.std_id = a.student_id');
        $this->db->join('subjects as c', 'c.sub_id = b.subject');
        $this->db->select('a.*, b.std_name as student_name, c.sub_name as subject_name');
        $this->db->where('a.id',$exam_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function update_exam_report($insert_data, $exam_id) {
        $this->db->where('id', $exam_id);
        return $this->db->update('exam', $insert_data);
    }
    public function get_all_sutudent_report($postData) {
        $this->_get_datatables_query($postData);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    private function _get_datatables_query($postData){
        if($this->input->post('student_name')) {
            $this->db->where('b.std_name', $this->input->post('student_name'));
        }
        $this->db->from('exam as a');
        $this->db->join('student_details as b', 'b.std_id = a.student_id');
        $this->db->select( 'a.*, b.std_name as student_name');
        $this->db->where('a.end_time is NOT NULL', NULL, FALSE);
        $i = 0;
        foreach($this->column_search as $item){
        	if($postData['search']['value']){
        		if($i===0){
        			$this->db->group_start();
                    $this->db->like($item, $postData['search']['value']);
                }else{
                    $this->db->or_like($item, $postData['search']['value']);
                }
                if(count($this->column_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
        if(isset($postData['order'])){
            $this->db->order_by($this->column_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function countAll(){
        $this->db->from('exam');
        return $this->db->count_all_results();
    }
    public function countFiltered($postData){
        $this->_get_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }

}