<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_student_report extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();
	}
    public function index() {
        if($this->session->userdata('username')) {
            $this->load->view("v_student_report");
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Wrong!</strong> You May Login First.</div>');
            redirect('home/index');
        }
    }
    public function get_student_report() {
        $data = $row = array();
        $student_report = $this->exam->get_all_sutudent_report($_POST);
		$i = $_POST['start'];
		$data = [];
		foreach($student_report as $student){
            $time_duration = (strtotime(date($student->end_time)) - strtotime($student->start_time))/60;
			$row = array();
			$i++;
			$row[] = $i;
			$row[] = !empty($student->student_name) ? $student->student_name : 'N/A';
			$row[] = $time_duration;
            $row[] = !empty($student->date) ? $student->date : 'N/A';
            $edit = '<a href="#" data-toggle="tooltip" class="btn btn-info view_student_exam_report" Title="View Post" data-examid="'.$student->id.'"><i class="fa fa-info-circle "></i> </a>'; 
			$row[] = $edit;
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->exam->countAll(),
			"recordsFiltered" => $this->exam->countFiltered($_POST),
			"data" => $data,
		);
		echo json_encode($output);
    }
    public function students_report(){
        $exam_id = $this->input->post('examId');
        if(isset($exam_id) and !empty($exam_id)){
            $records = $this->exam->get_exam_details($exam_id);
            echo "<pre>";
            print_r($records);die;
            $time_duration = (strtotime(date($records['end_time'])) - strtotime($records['start_time']))/60;
            $output = '';
            $output .= '
                    <table class="table table-bordered report" >
                        <tr>
                            <td><b>Student Name</b></td>
                            <td>'.$records["student_name"].'</td>
                        </tr>
                        <tr>
                            <td><b>Subject Name</b></td>
                            <td>'.$records["subject_name"].'</td>
                        </tr>
                        <tr>
                            <td><b>Time Duration</b></td>
                            <td>'.$time_duration.'&nbsp; Minutes</td>            
                        </tr>            
                        <tr>
                            <td><b>Exam Date</b></td>
                            <td>'.$records["date"].'</td>            
                        </tr>                         
                        <tr>
                            <td><b>Total No of Question Attempts</b></td>
                            <td>'.$records["no_of_given_answers"].'&nbsp; Questions</td>            
                        </tr>                         
                        <tr>
                            <td><b>Aplitude Scores</b></td>
                            <td>'.$records["aplitude_score"].'&nbsp; Marks</td>            
                        </tr>                         
                        <tr>
                            <td><b>Level First Score</b></td>
                            <td>'.$records["level_1_score"].'&nbsp; Marks</td>            
                        </tr>                         
                        <tr>
                            <td><b>Level Second Score</b></td>
                            <td>'.$records["level_2_score"].'&nbsp; Marks</td>            
                        </tr>                         
                        <tr>
                            <td><b>Level Third Score</b></td>
                            <td>'.$records["level_3_score"].'&nbsp; Marks</td>            
                        </tr>                         
                        <tr>
                            <td><b>No. of Wrong Answers</b></td>
                            <td>'.$records["wrong_answer_count"].'</td>            
                        </tr>                         
                        <tr>
                            <td><b>Negative Marks</b></td>
                            <td>'.$records["negative_marks"].'&nbsp; Marks</td>            
                        </tr>                         
                        <tr>
                            <td><b>Total Marks</b></td>
                            <td>'.$records["total_score"].'&nbsp; Marks</td>            
                        </tr>                         
                    </table>';
            echo $output;
        }
    }
}