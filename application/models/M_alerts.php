
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_alerts extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

     public function form_insert($alert,$recipient) {
        if ($this->db->query("insert into alerts (`msg_body`, `msg_to`) values ('$alert','$recipient')")) 
      
        {
           echo '<script language="javascript">';
    echo 'alert("plan has added successfully")';
    echo '</script>';
//    $this->load->view("view_plan");
        } 
        else
            {
        echo '<script language="javascript">';
    echo 'alert("error adding plan")';
    echo '</script>';
//    $this->load->view("add_plan");
            }
    }

     public function getmsg() {
        return $this->db->query("select * from alerts");
    }
                    
     public function edit($id)
	{	
		return $this->db->query("select * from alerts where msg_id='$id'");
		
	}
        
        public function update($id,$alert,$recipient)
	{
     $this->db->query("UPDATE `alerts` SET `msg_body` = '$alert', `msg_to`='$recipient' WHERE `msg_id` = '$id';");
		  
 //    		$this->load->view("view_plan");
     echo '<script language="javascript">';
    echo 'alert("plan has updated successfully")';
    echo '</script>';
	}
        
                
                public function Delete($id)
	{       
		$this->db->query("delete from alerts where msg_id=$id");
	}
}

?>