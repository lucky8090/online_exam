
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_resources extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

     public function form_insert($name,$desc,$file) {
        if ($this->db->query("insert into  resources (`res_name`, `res_desc`, `res_filename`) values ('$name','$desc','$file')")) 
      
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

     public function getresource() {
        return $this->db->query("select * from resources");
    }
                    
     public function edit($id)
	{	
		return $this->db->query("select * from resources where res_id='$id'");
		
	}
        
        public function update($id,$name,$desc,$file)
	{
     $this->db->query("UPDATE `resources` SET `res_name` = '$name', `res_desc`='$desc' WHERE `res_id` = '$id'");
		  
 //    	, res_filename` = '$file'	$this->load->view("view_plan");
     echo '<script language="javascript">';
    echo 'alert("plan has updated successfully")';
    echo '</script>';
	}
        
                
                public function Delete($id)
	{       
		$this->db->query("delete from resources where res_id=$id");
	}
}

?>