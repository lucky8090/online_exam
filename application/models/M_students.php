 
<?php if ( ! defined('BASEPATH')) {exit('No direct script access allowed');}

class M_students extends CI_Model
{
    function __construct(){
		parent::__construct();
    }
    
    
    public function check_details($con) {
        // $result = $this->db->get_where('student_details', $con);
        // return $result->result_array();
        $this->db->from('student_details as a');
        $this->db->join('subjects as b', 'b.sub_id = a.subject');
        $this->db->select('a.*, b.sub_name as subject_name');
        $this->db->where($con);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function admin_login($con) {
        // $result = $this->db->get_where('student_details', $con);
        // return $result->result_array();
        // $this->db->from('student_details as a');
        // $this->db->join('subjects as b', 'b.sub_id = a.subject');
        // $this->db->select('a.*, b.sub_name as subject_name');
        // $this->db->where($con);
        $this->db->from('login');
        $this->db->where($con);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function form_insert($data) {
        return $this->db->insert("student_details", $data);
    }

    public function getrecord($id) {
        $result = $this->db->get_where('student_details', ['course' => $id]);
        return $result->result_array();
    }
    public function get_details($student_id) {
        $result = $this->db->get_where('student_details', ['std_id' => $student_id]);
        return $result->row();
    }
            
            
            
    public function getplans() {
        $result = $this->db->query("select * from plans");
        return $result->result_array();
    }

            
    public function Delete($id) {       
        $this->db->query("delete from student_details where std_id=$id");
    }
    
    public function edit($id) {	
        $result = $this->db->get_where('student_details', ['std_id' => $id]);
        return $result->result_array();
    }
    
    public function update($id,$data) {
        $this->db->where('std_id', $id);
        $this->db->update('student_details', $data);

    }

    public function update_records($data, $student_id) {
        return $this->db->where('std_id', $student_id)->update('student_details', $data);
    }

    
}

?>