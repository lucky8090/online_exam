
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_subjects extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function form_insert($data) {
        return $this->db->insert("subjects", $data);
    }

    public function getcourses() {
        $result = $this->db->get('courses');
        return $result->result_array();
    }

    public function getrecord() {
        $result = $this->db->get('subjects');
        return $result->result_array();
    }
    public function get_all_subjects() {
        $result = $this->db->get_where('subjects',['sub_id !=' => 7]);
        return $result->result_array();
    }

    public function getsubjects() {
        return $this->db->query("select * from subjects");
    }

    public function Delete($id) {
        $this->db->query("delete from subjects where sub_id=$id");
    }

    public function edit($id) {
        $result = $this->db->get_where('subjects', ['sub_id' => $id]);
        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('sub_id', $id);
        $this->db->update('subjects', $data);

    }

}

?>