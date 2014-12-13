<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function getCourses()
    {
    	$query = $this->db->query("SELECT * FROM courses ORDER BY course_no");
    	$result = $query->result_array();

    	return $result;
    }

    public function send_mail($id, $recepient, $subject, $message)
    {
        

        $query = "INSERT INTO 
                            `mailerlog` 
                        VALUES 
                            (NULL,
                            '$recepient',
                            '$subject',
                            '$message',
                            null,
                            1)";
        $this->db->query($query);
    }

    public function getAdminCounts()
    {
        $query = $this->db->query(
                "SELECT count(api.applicant_id) as applicants FROM applicant_personal_info api
               JOIN applicant_guardian_info agi ON agi.applicant_id = api.applicant_id
               JOIN applicant_education_info aeinfo ON aeinfo.applicant_id = api.applicant_id
               JOIN applicant_contact_info aci ON aci.applicant_id = api.applicant_id
               JOIN applicant_course ac ON ac.applicant_id = api.applicant_id
               JOIN courses ON courses.course_id = ac.course_id
               JOIN application_approvals aa ON aa.applicant_id = api.applicant_id
               WHERE aa.status = 0 
               ");
       $result = $query->result_array();
       $data['applications'] = $result[0]['applicants'];

        $query = $this->db->query("SELECT count(id) as lecturers FROM lecturers");
       $result = $query->result_array();
       $data['lecturers'] = $result[0]['lecturers'];

        $query = $this->db->query("SELECT count(student_course_id) as students FROM student_course");
       $result = $query->result_array();
       $data['students'] = $result[0]['students'];

       $query = $this->db->query("SELECT count(course_id) as courses FROM courses");
       $result = $query->result_array();
       $data['courses'] = $result[0]['courses'];

       // echo "<pre>";print_r($data);die;
       return $data;
    }
}