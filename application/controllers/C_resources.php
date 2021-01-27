<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_resources extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();
                $this->load->database();
                $this->load->helper('url');
              
		$this->load->library('session');
                $this->load->helper(array('form', 'url'));
		if($this->session->has_userdata('bussiness_name') == NULL)
		{
			redirect(base_url()."c_login");
		}
	}
	public function index()
	{
		$this->load->model('m_resources');
           $data['record_resource'] = $this->m_resources->getresource();
		$this->load->view('v_resources',$data);
	}
        
        public function add_resource()
         {
                if( $this->input->post('submit') == 'Submit') 
         {          
                    
                
                  $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|doc|docx|zip';
                $config['max_size']             = 100000;
                $config['overwrite']             =true;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                               
                if ( ! $this->upload->do_upload('name'))
                {
                        $this->load->view('v_addresource');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $file=$this->upload->data('file_name');
                        $desc = $this->input->post('desc');
                        $name = $this->input->post('title');
                        $this->load->model('m_resources');
                        
                        $this->m_resources->form_insert($name,$desc,$file);
                        redirect(site_url('c_resources/'));
                        
                }
                               
        } 
        else 
            {
            
              $this->load->view("v_addresource");
            }
         }
         
         
         
        public function edit_resource()
{
        $id = $this->uri->segment(3);	
        $this->load->model("m_resources");
     
        $data['record_resource'] = $this->m_resources->edit($id);
        $this->load->view("update_resource",$data);

}

public function update_resource() 
    {
        
     if($this->input->post('submit') == 'Submit')   
     {
         $id=$this->input->post('id');
       $name = $this->input->post('name');
        $desc = $this->input->post('desc');
         $file = $this->input->post('file');
        $this->load->database();
        $this->load->model('m_resources');
        $this->m_resources->update($id,$name,$desc,$file);
         redirect(site_url('c_resources/'));
        }

     else{
        redirect(site_url('c_resources/'));
     }
    }

         
        public function delete()
		{
			$id=$this->input->post("p_id");
                       
                        $this->load->model("m_resources");
			$this->m_resources->Delete($id);
			}
         
}

?>