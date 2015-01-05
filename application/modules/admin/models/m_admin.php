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
                        `api`.`dob`,
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

    function add_application($path = NULL)
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
        $query = $this->db->query("INSERT INTO student_course VALUES(NULL, '".$student_no."', '".$course_short_code."', NULL, ".$a_id.",1002)");

        if($query)
        {
            $query = $this->db->query("UPDATE application_approvals SET status = 1 WHERE applicant_id = " .$a_id);
            $details = $this->student_details($a_id);

            $student_data = array();

            $student_info = array(
                'student_no' =>$student_no,
                'firstname' => $details[0]['f_name'], 
                'lastname' => $details[0]['s_name'], 
                'othernames' => $details[0]['l_name'], 
                'student_phone' => $details[0]['mobile_no'], 
                'parent_phone' => $details[0]['sponsor_telephone_no'], 
                'student_email' => $details[0]['email'], 
                'parent_email' => $details[0]['sponsor_email'], 
                'location' => $details[0]['current_city'], 
                'photo' => NULL, 
                'admission_date' => NULL, 
                'group_id' => 1 
                );

            array_push($student_data, $student_info);

            $this->db->insert_batch('students',$student_data);
            echo "SUCCESSFUL STUDENT REGISTRY. APPLICANT ID No. ".$a_id;
            // echo "<pre>";print_r($details);echo "</pre>";exit;
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

    public function student_details($st_id=NULL)
    {
        $kuchoka = (isset($st_id))? "WHERE aa.applicant_id = $st_id": NULL;
       $query = $this->db->query(
                "SELECT * FROM applicant_personal_info api
               JOIN applicant_guardian_info agi ON agi.applicant_id = api.applicant_id
               JOIN applicant_education_info aeinfo ON aeinfo.applicant_id = api.applicant_id
               JOIN applicant_contact_info aci ON aci.applicant_id = api.applicant_id
               JOIN applicant_course ac ON ac.applicant_id = api.applicant_id
               JOIN courses ON courses.course_id = ac.course_id
               JOIN application_approvals aa ON aa.applicant_id = api.applicant_id
                $kuchoka
               ");
       $result = $query->result_array();

       return $result;
   }
   
}