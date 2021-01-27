<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Register extends REST_Controller {

    function __construct(){
        parent::__construct();
    }

    private function verify_request() {
        $headers = $this->input->request_headers();
        $token = $headers['Authorizations'];
        try {
            $data = AUTHORIZATION::validateToken($token);
            if ($data === false) {
                $status = parent::HTTP_UNAUTHORIZED;
                $response = ['status' => $status, 'msg' => 'Unauthorized Access!'];
                $this->response($response, $status);
                exit();
            } else {
                return $data;
            }
        } catch (Exception $e) {
            $status = parent::HTTP_UNAUTHORIZED;
            $response = ['status' => $status, 'msg' => 'Unauthorized Access! '];
            $this->response($response, $status);
        }
    }
    
    public function register_post() {
        $data = array();
        $username = $this->post('username');
        $password = $this->post('password');
        $subject = $this->post('subject');
        $name = $this->post('name');
        if((!empty($username) && !empty($password) && !empty($subject) && !empty($name))){
            if(is_numeric($username)) {
                $con = array(
                    'std_mob' => $username
                );
                $data = array(
                    'std_mob' => $username,
                    'std_pass' => md5($password),
                    'subject' => $subject,
                    'std_name' => $name
                );
            } else {
                $con = array(
                    'std_email' => $username
                );
                $data = array(
                    'std_email' => $username,
                    'std_pass' => md5($password),
                    'subject' => $subject,
                    'std_name' => $name
                );
            }
            $studentCount = $this->m_students->check_details($con);
            if($studentCount != NULL) {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'The Username already exists.'
                ], REST_Controller::HTTP_BAD_REQUEST);
            } else {
                $insert = $this->m_students->form_insert($data);
                $insert_id = $this->db->insert_id();
                $token = AUTHORIZATION::generateToken(['student_id' => $insert_id]);
                if($insert){
                    $this->response([
                        'token' => $token,
                        'status' => REST_Controller::HTTP_OK,
                        'message' => 'The Student has been added successfully.',
                    ], REST_Controller::HTTP_OK);
                } else {
                    $this->response([
                        'status' => REST_Controller::HTTP_BAD_REQUEST,
                        'message' => 'Some problems occurred, please try again.'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
            }
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Please Provide Student Details .'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function login_post() {
        $data = array();
        $username = $this->post('username');
        $password = $this->post('password');
        if(!empty($username) && !empty($password)){
            $this->form_validation->set_rules('username','username', 'required|regex_match[/^[0-9]{10}$/]');
            if(is_numeric($username)) {
                $con = array(
                    'std_mob' => $username,
                    'std_pass' => md5($password)
                );
            } else {
                $con = array(
                    'std_email' => $username,
                    'std_pass' => md5($password),
                );
            }
            $student_details = $this->m_students->check_details($con);
            if($student_details){
                if( $student_details[0]['std_email'] == NULL ) {
                    $student_login_id = $student_details[0]['std_mob'];
                } else {
                    $student_login_id = $student_details[0]['std_email'];
                }
                $token = AUTHORIZATION::generateToken(['student_id' => $student_details[0]['std_id']]);
                $data = array(
                    "student_id" => $student_details[0]['std_id'],
                    "username" => $student_login_id,
                    "Department" => $student_details[0]['subject_name'],
                    "created_on" => $student_details[0]['reg_date']
                );
                $this->response([
                    'status' => REST_Controller::HTTP_OK,
                    'message' => 'Student login successfully.',
                    'token' => $token,
                    'data' => $data
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'Invalid Username or Password.'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Please Enter Username and Password.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function get_question_paper_get() {
        $data = array();
        $ques_array = array();
        $data = $this->verify_request();
        $student_id = $data->student_id;
        $get_question_details = $this->m_setquestions->check_record();
        $date = date('Y-m-d');
        $start_time = date('H:i:s');
        $check_quues = $this->exam->get_questions($student_id,$date );
        $selected_subject = $this->m_students->edit($student_id);
        $subject_id = $selected_subject[0]['subject'];
        if($check_quues == NULL) {
            $data = array(
                'reasoning_question' => $this->m_qanswers->get_reasoning_random_questions($get_question_details[0]['reasoning']),
                'easy_questions' => $this->m_qanswers->get_easy_random_questions($subject_id, $get_question_details[0]['easy']),
                'medium_questions' => $this->m_qanswers->get_medium_random_questions($subject_id, $get_question_details[0]['medium']),
                'high_questions' => $this->m_qanswers->get_high_random_questions($subject_id, $get_question_details[0]['high']),
            );
            foreach($data['reasoning_question'] as $reasoning) {
                $ques_array[] = $reasoning['q_id']; 
            }
            foreach($data['easy_questions'] as $easy) {
                $ques_array[] = $easy['q_id']; 
            }
            foreach($data['medium_questions'] as $medium) {
                $ques_array[] = $medium['q_id']; 
            }
            foreach($data['high_questions'] as $high) {
                $ques_array[] = $high['q_id']; 
            }
            $question_arr = implode(',', $ques_array);
            $insert_data = array (
                'student_id' => $student_id,
                'questions' => $question_arr,
                'start_time' => $start_time,
                'date' => $date
            );
            
            $total_question = $this->exam->save_questions($insert_data);
            if ($total_question) {
                $this->response([
                    'status' => REST_Controller::HTTP_OK,
                    'data' => $data,
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'Some problems occurred, please try again.'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'You Have Already Given An Exam'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function subject($ques_id) {
        $subject = $this->exam->get_question($ques_id);
        foreach ($subject as $value) {
            $sub_id = $value;
        }
        return $sub_id->sub_id;
    }
    public function exam_level($ques_id) {
        $exam_levels = $this->exam->get_question_level($ques_id);
        foreach ($exam_levels as $value) {
            $exam_levels = $value;
        }
        return $exam_levels->exam_level;
    }
    public function check_correct_ques($ques_id, $student_ans) {
        $result = $this->exam->check_question_ans($ques_id);
        if($result[0]['correct_ans'] == $student_ans) {
            return 1;
        } else {
            return 0;
        }
    }
    public function exam_result_post() {
        // echo "working";die;
        // print_r($_POST);die;
        $data = array();
        $answer = array();
        $ques_id = array();
        $exam_level = array();
        $ques = array();
        $val = array();
        $reasoning_marks = 0;
        $easy_marks = 0;
        $medium_marks = 0;
        $high_marks = 0;
        $total_marks = 0;
        $wrong_count = 0;
        $not_answered = 0;
        $data1 = $this->verify_request();
        $student_id = $data1->student_id;
        // $start_time = $this->post('start_time');
        $end_time = date('H:i:s');
        $date = date('Y-m-d');
        // $data = ['ch4', 'ch3', 'ch3', 'ch1', 'ch2', '0', 'ch2', '0', 'ch2', '0', 'ch1', 'ch1', '0'];
        $answers = $this->post('answers');
        $data = explode(',',$answers );
        $get_question = $this->exam->get_questions($student_id,$date);
        if($get_question == NULL) {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'You Are not Eligible For Give Exam'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $qustion_id = explode(',',$get_question[0]['questions'] );
            foreach ($qustion_id as $key =>  $question) {
                if($data[$key] == '0'){
                    $not_answered++;
                }
                $subject_id = $this->subject($question);
                $exam_level = $this->exam_level($question);
                if($subject_id == 7) {
                    $check_question = $this->check_correct_ques($question,$data[$key]);
                    if($check_question == 0) {
                        $wrong_count++;
                    } else {
                        $reasoning_marks++;
                        $total_marks++;
                    }
                }
                if($subject_id != 7) {
                    if($exam_level == 1) {
                        $check_question = $this->check_correct_ques($question,$data[$key]);
                        if($check_question == 0) {
                            $wrong_count++;
                        } else {
                            $easy_marks++;
                            $total_marks++;
                        }
                    }
                    if($exam_level == 2) {
                        $check_question = $this->check_correct_ques($question,$data[$key]);
                        if($check_question == 0) {
                            $wrong_count++;
                        } else {
                            $medium_marks++;
                            $total_marks++;
                        }
                    }
                    if($exam_level == 3) {
                        $check_question = $this->check_correct_ques($question,$data[$key]);
                        if($check_question == 0) {
                            $wrong_count++;
                        } else {
                            $high_marks++;
                            $total_marks++;
                        }
                    }
                }
    
            }
            $count = $wrong_count-$not_answered;
            $given_ans = $total_marks + $count;
            $get_question_details = $this->m_setquestions->check_record();
            if($get_question_details[0]['negative_marking'] == 2) {
                $neg_marks = 0;
                $total_score = $total_marks;
            } else {
                $neg_marks = $get_question_details[0]['neg_marking_value']*$count;
                $total_score = $total_marks - $neg_marks;
            }
            $question_arr = implode(',', $qustion_id);
            $answer_arr = implode(',', $data);
            $insert_data = array(
                // 'start_time' => $start_time,
                'end_time' => $end_time,
                'date' => $date,
                'questions' => $question_arr,
                'student_answers' => $answer_arr,
                'aplitude_score' => $reasoning_marks,
                'level_1_score' => $easy_marks,
                'level_2_score' => $medium_marks,
                'level_3_score' => $high_marks,
                'negative_marks' => $neg_marks,
                'total_score' => $total_score,
                'no_of_given_answers' => $given_ans,
                'wrong_answer_count' => $count,
                'correct_answers_count' => $total_marks,
            );
            $final_result = $this->exam->update_exam_report($insert_data, $get_question[0]['id']);
            if($final_result) {
                $this->response([
                    'status' => REST_Controller::HTTP_OK,
                    'message' => 'Exam Conducted successfully.'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'Some problems occurred, please try again.'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function view_exam_report_get() {
        $data = $this->verify_request();
        $student_id = $data->student_id;
        if($student_id) {
            $get_eaxm_report = $this->exam->get_sutudent_report($student_id);
            if($get_eaxm_report) {
                $this->response([
                    'status' => REST_Controller::HTTP_OK,
                    'message' => 'Student Exams Report.',
                    'data' => $get_eaxm_report
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'You have not given any Exam.'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Some problems occurred, please try again.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function get_all_subject_get() {
        $get_eaxm_report = $this->m_subjects->get_all_subjects();
        if($get_eaxm_report) {
            $this->response([
                'status' => REST_Controller::HTTP_OK,
                'message' => 'All Subjects.',
                'data' => $get_eaxm_report
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Some problems occurred, please try again.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function change_password_post() {
        $data = $this->verify_request();
        $student_id = $data->student_id;
        $old_password = $this->post('old_password');
        $new_password = $this->post('new_password');
        $confirm_password = $this->post('confirm_password');
        $get_student_details = $this->m_students->get_details($student_id);
        if((!empty($old_password) && !empty($new_password) && !empty($confirm_password))){
            if($get_student_details->std_pass == md5($old_password)) {
                if($new_password == $confirm_password) {
                    if($old_password != $new_password) {
                        $data = array(
                            'std_pass' => md5($new_password)
                        );
                        $result = $this->m_students->update_records($data, $student_id);
                        if($result) {
                            $this->response([
                                'status' => REST_Controller::HTTP_OK,
                                'message' => 'Password Updated successfully.',
                            ], REST_Controller::HTTP_OK);
                        } else {
                            $this->response([
                                'status' => REST_Controller::HTTP_BAD_REQUEST,
                                'message' => 'Something went wrong please try again.'
                            ], REST_Controller::HTTP_BAD_REQUEST);
                        }
                    } else {
                        $this->response([
                            'status' => REST_Controller::HTTP_BAD_REQUEST,
                            'message' => 'Please Enter New Password.'
                        ], REST_Controller::HTTP_BAD_REQUEST);
                    }
                } else {
                    $this->response([
                        'status' => REST_Controller::HTTP_BAD_REQUEST,
                        'message' => 'Password mismatched.'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
            } else {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'Your Old Password Did not Match.'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Please Fill All the columns .'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function get_student_details_get() {
        $data = $this->verify_request();
        $student_id = $data->student_id;
        $result = $this->m_students->get_details($student_id);
        $res = array(
            "student_id" => $result->std_id,
            "student_name" => $result->std_name,
            "mobile_number" => $result->std_mob,
            "addresss" => $result->std_home,
            "subject" => $result->subject,
            "dob" => $result->dob,
            "father_name" => $result->father_name,
            "father_name" => $result->father_name,
            "email" => $result->std_email
        );
        if($result) {
            $this->response([
                'status' => REST_Controller::HTTP_OK,
                'message' => 'Student Record.',
                'data' => $res
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Record Not Found.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function update_profile_post() {
        // $data = $this->verify_request();
        // $student_id = $data->student_id;
        $std_id = $this->post('std_id');
        $name = $this->post('name');
        $mobile = $this->post('mobile');
        $email = $this->post('email');
        $dob = $this->post('dob');
        $father_name = $this->post('father_name');
        $subject = $this->post('subject');
        $address = $this->post('address');
        if(!empty($std_id) && !empty($name)&& !empty($mobile)&& !empty($email) && !empty($dob)&& !empty($father_name)&& !empty($subject) && !empty($address)){
            $data = array(
                'std_name' => $name,
                'std_mob' => $mobile,
                'std_email' => $email,
                'dob' => $dob,
                'father_name' => $father_name,
                'subject' => $subject,
                'std_home' => $address
            );
            $result = $this->m_students->update_records($data, $std_id);
            if($result) {
                $this->response([
                    'status' => REST_Controller::HTTP_OK,
                    'message' => 'Records Updated successfully.',
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'Something went wrong Please try again'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Please Fill All the Records.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function get_exam_details_post() {
        $exam_id = $this->post('exam_id');
        if(!empty($exam_id)) {
            $result = $this->exam->get_exam_details($exam_id);
            if($result) {
                $this->response([
                    'status' => REST_Controller::HTTP_OK,
                    'message' => 'Student Record.',
                    'data' => $result
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => REST_Controller::HTTP_BAD_REQUEST,
                    'message' => 'Record Not Found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => REST_Controller::HTTP_BAD_REQUEST,
                'message' => 'Something Went wrong Please Try Again.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}