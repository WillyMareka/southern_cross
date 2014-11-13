<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

   public function applications(){

        $sql = "SELECT `api`.`applicant_id`,
                        `api`.`f_name`,
                        `api`.`s_name`,
                        `api`.`l_name`,
                        YEAR(`api`.`dob`) AS year,
                        MONTH(`api`.`dob`) AS month,
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

    public function getApplicantInstitutions($a_id)
    {
        $query = $this->db->get_where('applicant_educational_institutions', array('applicant_id' => $a_id));
        $result = $query->result_array();
        return $result;
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
                    `identity`,
                    `email`,
                    YEAR(`registration_date`) AS year,
                    MONTH(`registration_date`) AS month,
                    `status`
                FROM 
                    `staff`
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
        $identification = $this->input->post('identification');
        $email = $this->input->post('staff_email');
        $location = strtoupper($this->input->post('location'));
       // $course = $this->input->post('course');

        $query = "INSERT INTO staff VALUES(NULL, '$firstname', '$lastname', '$others', '$dob', '$gender', '$email', '$phone', '$identification', '$path', NULL, 1, '$location')";
        $result = $this->db->query($query);
    }

    function getCourseById($course_id)
    {
        $query = $this->db->get_where('student_course', array('course_id' => $course_id));

        $result = $query->result_array();

        return $result;
    }


    function save_student($student_no, $course_short_code, $a_id)
    {
        $query = $this->db->query("INSERT INTO student_course VALUES(NULL, '".$student_no."', '".$course_short_code."', NULL, ".$a_id.")");
        if($query)
        {
            $query = $this->db->query("UPDATE application_approvals SET status = 1 WHERE applicant_id = " .$a_id);
        }
        else
        {
            echo "false";
        }
    }

    public function get_gender_details()
    {
       $sql = "SELECT 
                    COUNT(*) AS `total`,
                    SUM(CASE WHEN `gender` = 'Female' AND `status` = 2 THEN 1 ELSE 0 END) AS `approved_female`,
                    SUM(CASE WHEN `gender` = 'Male' AND `status` = 2 THEN 1 ELSE 0 END) AS `approved_male`,
                    SUM(CASE WHEN `gender` = 'Female' AND `status` = 1 THEN 1 ELSE 0 END) AS `unapproved_female`,
                    SUM(CASE WHEN `gender` = 'Male' AND `status` = 1 THEN 1 ELSE 0 END) AS `unapproved_male`,
                SUM(CASE WHEN `gender` = 'Female' AND `status` = 3 THEN 1 ELSE 0 END) AS `rejected_female`,
                    SUM(CASE WHEN `gender` = 'Male' AND `status` = 3 THEN 1 ELSE 0 END) AS `rejected_male`
                FROM `applicant_personal_info`";
    }


   
}