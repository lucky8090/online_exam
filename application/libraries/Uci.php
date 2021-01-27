<?php
	
	class Uci {
    private $CI;

	function __construct() {
       $this->CI =& get_instance();
       $this->CI->load->database();
	}
	
	public function get_conditional_rows($table,$where,$ordercol=false,$orderval=false,$limit=false){
	    if(!empty($ordercol)){$this->CI->db->order_by($ordercol,$orderval);}
	    if(!empty($limit)){$this->CI->db->limit($limit);}
		return $this->CI->db->get_where($table,$where)->result_array();
	}
	
	public function get_single_row($table,$where){
		return $this->CI->db->get_where($table,$where)->row_array();
	}
	
	public function get_savedcards_rows($table,$where){
	    $sql="SELECT  * from savedcards WHERE userid ='".$where['userid']."' ";
        return $this->CI->db->query($sql)->result_array();
	}
	
    public function get_all_rows($table,$ordercol=false,$orderval=false,$limit=false){
        if(!empty($ordercol)){$this->CI->db->order_by($ordercol,$orderval);}
        if(!empty($limit)){$this->CI->db->limit($limit);}
        return $this->CI->db->get($table)->result_array();
    }
	
	public function updatedata($table,$data,$col,$id){
		return $this->CI->db->where($col,$id)->update($table,$data);
	}
    
    public function deletedata($table,$col,$id){
        return $this->CI->db->where($col,$id)->delete($table);
    }
	
	public function insertdata($table,$data){
		$this->CI->db->insert($table,$data);
		return $this->CI->db->insert_id();
	}
	
	public function count_rows($table,$where=false){
	   if(!empty($where)){$this->CI->db->where($where);}
	   return $this->CI->db->get($table)->num_rows();
	}
}
?>