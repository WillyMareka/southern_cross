<?php 

class Student_model extends MY_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function get_all_students()
    {
       $query = $this->db->query(
                "SELECT * FROM applicant_personal_info api
               JOIN applicant_guardian_info agi ON agi.applicant_id = api.applicant_id
               JOIN applicant_education_info aeinfo ON aeinfo.applicant_id = api.applicant_id
               JOIN applicant_contact_info aci ON aci.applicant_id = api.applicant_id
               JOIN applicant_course ac ON ac.applicant_id = api.applicant_id
               JOIN courses ON courses.course_id = ac.course_id
               JOIN application_approvals aa ON aa.applicant_id = api.applicant_id
               WHERE aa.status = 1 
               ");
       $result = $query->result_array();

       return $result;
   }

   public function student_details($st_id=NULL)
    {
        $kuchoka = (isset($st_id))? "WHERE aa.applicant_id = $st_id": NULL;
       $query = $this->db->query(
                "SELECT * FROM student WHERE student_no = 1002
               ");
       $result = $query->result_array();

       return $result;
   }

}