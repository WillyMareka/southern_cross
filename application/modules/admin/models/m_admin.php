<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function applications()
    {

        $sql = "SELECT `api`.`applicant_id`,
                        `api`.`f_name`,
                        `api`.`s_name`,
                        `api`.`l_name`,
                        `api`.`dob`,
                        `api`.`gender`,
                        `api`.`citizenship`,
                        `api`.`status`,
                        `aei`.`entry_id`,
                        `aei`.`applicant_id`,
                        `aei`.`yrs_of_english`,
                        `aei`.`primary_level`,
                        `aei`.`secondary_level`,
                        `aeis`.`institution_name`,
                        `agi`.`sponsor_names`
                    FROM `applicant_personal_info` `api`
                    LEFT JOIN `applicant_education_info` `aei`
                    ON `api`.`applicant_id` = `aei`.`applicant_id`
                    LEFT JOIN `applicant_educational_institutions` `aeis`
                    ON `api`.`applicant_id` = `aeis`.`applicant_id`
                    LEFT JOIN `applicant_guardian_info` `agi`
                    ON `api`.`applicant_id` = `agi`.`applicant_id`
                    ";

                    // echo $sql;die();
        $res = $this->db->query($sql);

        return $res->result_array();
    }

 public function application($id)
    {
        $sql = "SELECT `api`.`applicant_id`,
                        `api`.`f_name`,
                        `api`.`s_name`,
                        `api`.`l_name`,
                        `api`.`dob`,
                        `api`.`gender`,
                        `api`.`citizenship`,
                        `api`.`status`,
                        `aei`.`entry_id`,
                        `aei`.`applicant_id`,
                        `aei`.`yrs_of_english`,
                        `aei`.`secondary_level`
                    FROM `applicant_personal_info` `api`
                    LEFT JOIN `applicant_education_info` `aei`
                    ON `api`.`applicant_id` = `aei`.`applicant_id`
                    WHERE `api`.`applicant_id` = '$id'
                    ";

                    // echo $sql;die();
        $res = $this->db->query($sql);

        return $res->result_array();

    }


    function get_staff()
    {
        $sql = "SELECT
                    `id`,
                   `f_name`,
                    `s_name`,
                    `o_names`,
                    `gender`,
                    `phone_no`,
                    `email`,
                    `registration_date`,
                    `status`
                FROM 
                    `lecturers`
                ";

        $staff = $this->db->query($sql);

        return $staff->result_array();
    }

    function get_courses()
    {
        $sql = "SELECT
                    `course_id`,
                    `course_name`,
                    `course_short_code`,
                    `Description`
                FROM
                    `courses`";

        $courses = $this->db->query($sql);

        return $courses->result_array();

    }

    function get_course_by_id($course_id)
    {
        $sql = "SELECT
                    `course_id`,
                    `course_name`,
                    `course_short_code`,
                    `Description`
                FROM
                    `courses`
                WHERE `course_id` =".$course_id;

        $courses = $this->db->query($sql);

        return $courses->result_array();

    }


    function add_application($path)
    {
        $firstname = strtoupper($this->input->post('firstname'));
        $lastname = strtoupper($this->input->post('lastname'));
        $others = strtoupper($this->input->post('othername'));
        $phone = $this->input->post('phonenumber');
        $gender = $this->input->post('gender');
        $student_email = $this->input->post('student_email');
        $parent_phone = $this->input->post('parent_phone');
        $parent_email= $this->input->post('parent_email');
        $location = strtoupper($this->input->post('location'));
        $course = $this->input->post('course');

        $query = "INSERT INTO students VALUES(NULL, '$firstname', '$lastname', '$others', '$phone', '$gender', '$parent_phone', '$student_email', '$parent_email', '$location', '$path', NULL, '$course', 1)";
        $result = $this->db->query($query);
    }

    public function addStaff($path)
    {
        $firstname = strtoupper($this->input->post('firstname'));
        $lastname = strtoupper($this->input->post('surname'));
        $others = strtoupper($this->input->post('othername'));
        $dob = $this->input->post('dob');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phonenumber');
        $email = $this->input->post('staff_email');
        $location = strtoupper($this->input->post('location'));
       // $course = $this->input->post('course');

        $query = "INSERT INTO staff VALUES(NULL, '$firstname', '$lastname', '$others', '$dob', '$gender', '$email', '$phone', '$path', NULL, 1, '$location')";
        $result = $this->db->query($query);
    }

    public function add_lecturer($path){
        $lec_data = array();
        $lec_course = $this->input->post('lec_course');
        $firstname = strtoupper($this->input->post('firstname'));
        $surname = strtoupper($this->input->post('surname'));
        $othername = strtoupper($this->input->post('othername'));
        $national_id = $this->input->post('passport_id');
        $dob = $this->input->post('dob');
        $gender = strtoupper($this->input->post('gender'));
        $phone = $this->input->post('phonenumber');
        $email = $this->input->post('lec_email');
        $location = strtoupper($this->input->post('location'));

        $lec_info = array(
            'course' => $lec_course,
            'f_name' => $firstname,
            's_name' => $surname,
            'o_names' => $othername,
            'national_id' => $national_id,
            'dob' => $dob,
            'gender' => $gender,
            'email' => $email,
            'phone_no' => $phone,
            'profile_picture' => $path,
            'status' => 1,
            'location' => $location

         );
        array_push($lec_data, $lec_info);
        $this->db->insert_batch('lecturers',$lec_data);

        $lec_table_id = mysql_insert_id();
        $year=date('y');
 

        $course_details=$this->get_course_by_id($lec_course);
        //UNCOMMENT THE BELOW CODE TO ADD THE COURSE SHORT CODE TO THE LECTURER ID.
        //BE SURE TO COMMENT THE ONE BELOW IT UPON DECISION TO DO SO
        $assigned_id = "CL\/".$course_details[0]['course_short_code']."\/".$lec_table_id."\/".date('y');
        //$assigned_id = "CL\/".$lec_table_id."\/".date('y');
        //echo $assigned_id;exit;

        $query = "UPDATE `lecturers` SET `assigned_id`= '$assigned_id' WHERE id = '$lec_table_id'";

        //echo $query;exit;
        $update=$this->db->query($query);
        
    }


   
}