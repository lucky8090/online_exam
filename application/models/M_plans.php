
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_plans extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

     public function form_insert($data) {
        return $this->db->insert("plans", $data);
    }

     public function getplans() {
        return $this->db->query("select * from plans");
    }
                    
    public function edit($id) {	
        $result = $this->db->get_where('plans', ['p_id' => $id]);
        return $result->result_array();
    }
        
    public function update($id,$data) {
        $this->db->where('p_id', $id);
        $this->db->update('plans', $data);
	}
        
                
    public function Delete($id) {       
		$this->db->query("delete from plans where p_id=$id");
	}
}

?>