
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_courses extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

     public function form_insert($data) {
        return $this->db->insert("courses", $data);
    }

    public function getcourses() {
        return $this->db->query("select * from courses");
    }
                
                public function Delete($id)
	{       
		$this->db->query("delete from courses where c_id=$id");
	}
 
    public function edit($id) {	
        $result = $this->db->get_where('courses', ['c_id' => $id]);
        return $result->result_array();
		
	}
        
    public function update($id,$data) {
        $this->db->where('c_id', $id);
        $this->db->update('courses', $data);
    }
        
}

?>
