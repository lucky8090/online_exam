<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function check($username,$password) {	
		// $query = $this->db->query("select login.*,admin_details.bussiness_name from  login inner join admin_details on login.userid = admin_details.userid  where login.username = '$username' and login.password = '$password' and login.status='1'");
		// echo $this->db->last_query($query);die;
		// return $query->result_array();
	}
}
?>