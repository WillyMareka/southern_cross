<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    // public function applications()
    // {
    // 	$sql = "SELECT * FROM `applications`";


    // 	$apps = $this->db->query($sql);
    	
    // 	return $apps->result_array();
    // }

    public function applications()
    {
        $sql = "SELECT `api`.`applicant_id`,
                        `api`.`f_name`,
                        `api`.`s_name`,
                        `api`.`l_name`,
                        `api`.`dob`,
                        `api`.`gender`,
                        `api`.`citizenship`,
                        -- `api`.`status`,
                        `aei`.`entry_id`,
                        `aei`.`applicant_id`,
                        `aei`.`yrs_of_english`,
                        `aei`.`secondary_level`
                    FROM `applicant_personal_info` `api`
                    LEFT JOIN `applicant_education_info` `aei`
                    ON `api`.`applicant_id` = `aei`.`applicant_id`
                    ";
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


   
}