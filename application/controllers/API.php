<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller {


public function signup(){
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        if(!isset($_POST['name']) || !isset($_POST['mobile']) || !isset($_POST['email']) || !isset($_POST['password'])){
           echo json_encode(array('status'=>'false','msg'=>'Parameter Missing'));exit; 
        }
        
        $this->db->insert('students',array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'password'=>$password));
        
        echo json_encode(array('status'=>'true','msg'=>'Regsitration Success'));
    }

public function login(){

    if(!empty($this->input->post('email_mobile'))){
    	    $email_mobile = $this->input->post('email_mobile');
            if(is_numeric($email_mobile)){
                 $userResponse=$this->db->get_where('student_details',['std_mob'=>$email_mobile] )->row_array();
            }else{
                 $userResponse=$this->db->get_where('student_details',['std_email'=>$email_mobile] )->row_array();
            }

            if($userResponse){
               
                if($userResponse['std_pass'] == $this->input->post('std_pass')){
                    echo json_encode(array('status'=>'1','msg'=>'Login Successful','userid'=>$userResponse['std_id']));
                    
                }else{
                     echo json_encode(array('status'=>0,'msg'=>'Password does not match !!!'));   
                }
            }else{
                echo json_encode(array('status'=>0,'msg'=>'User does not exist , please sign up !!!'));   
            }
           
        }else{
            echo json_encode(array('status'=>0,'msg'=>'Please enter your registered email / mobile number !!!'));  
        }
       
	}

}