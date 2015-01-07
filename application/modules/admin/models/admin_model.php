<?php 

class Admin_model extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function student_applications()
    {
       $query = $this->db->query(
                "SELECT * FROM applicant_personal_info api
               JOIN applicant_guardian_info agi ON agi.applicant_id = api.applicant_id
               JOIN applicant_education_info aeinfo ON aeinfo.applicant_id = api.applicant_id
               JOIN applicant_contact_info aci ON aci.applicant_id = api.applicant_id
               JOIN applicant_course ac ON ac.applicant_id = api.applicant_id
               JOIN courses ON courses.course_id = ac.course_id
               JOIN application_approvals aa ON aa.applicant_id = api.applicant_id
               WHERE aa.status = 0 
               ");
       $result = $query->result_array();
	   
       return $result;
	   
   }
   
   public function addStudentUser($username)
   {
   	$password = md5('123456');
   	$query = $this->db->query("INSERT INTO users VALUES(NULL, '".$username."', '".$password."', 'student', NULL, 0)");

   	if ($query) {
   		return true;
   	}

   	else
   	{
   		return false;
   	}
   }
}