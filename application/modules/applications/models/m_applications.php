<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_applications extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function add_applicant($path){
    	//echo "<pre>";print_r($this->input->post());echo "</pre>";exit;
    	// echo "<pre>";print_r(count($this->input->post()));echo "</pre>";exit;
    	$f_name = $_POST['f_name'];
    	$s_name = $_POST['s_name'];
    	$l_name = $_POST['l_name'];
    	$dob = $_POST['dob'];
    	$year_of_entry = $_POST['yr_of_entry'];
    	$diploma_level = $_POST['diploma_level'];
    	// $certificate_level = $_POST['certificate_level'];
    	$citizenship = $_POST['citizenship'];
    	$birth_country = $_POST['birth_country'];
    	$applicant_gender = $_POST['applicant_gender'];
    	$marital_status = $_POST['marital_status'];
    	$yrs_of_english_education = $_POST['yrs_of_english_education'];
    	$educ_primary_level = $_POST['educ_primary_level'];
    	$educ_secondary_level = $_POST['educ_secondary_level'];
    	$educ_post_secondary = $_POST['educ_post_secondary'];
    	$other_languages = $_POST['other_languages'];
    	$applicant_disability = $_POST['applicant_disability'];
    	$applicant_disability_info = $_POST['applicant_disability_info'];
    	$applicant_postal_address = $_POST['applicant_postal_address'];
    	$applicant_postal_code = $_POST['applicant_postal_code'];
    	$applicant_city = $_POST['applicant_city'];
    	$applicant_country = $_POST['applicant_country'];
    	$applicant_email = $_POST['applicant_email'];
    	$applicant_telephone_no = $_POST['applicant_telephone_no'];
    	$applicant_office_no = $_POST['applicant_office_no'];
    	$applicant_mobile_no = $_POST['applicant_mobile_no'];
    	
    	$sponsor_names = $_POST['sponsor_names'];
    	$sponsor_relation = $_POST['sponsor_relation'];
    	$sponsor_address = $_POST['sponsor_address'];
    	$sponsor_telephone_no = $_POST['sponsor_telephone_no'];
    	$sponsor_email = $_POST['sponsor_email'];
    	$sponsor_mobile = $_POST['sponsor_mobile'];
    	$sponsor_occupation = $_POST['sponsor_occupation'];
    	$sponsor_monthly_income = $_POST['sponsor_monthly_income'];

    	$applicant_educ_institution_name_1 = $_POST['applicant_educ_institution_name_1'];
    	$applicant_educ_level_1 = $_POST['applicant_educ_level_1'];
    	$applicant_educ_study_area_1 = $_POST['applicant_educ_study_area_1'];
    	$applicant_educ_duration_from_1 = $_POST['applicant_educ_duration_from_1'];
    	$applicant_educ_duration_to_1 = $_POST['applicant_educ_duration_to_1'];
    	$applicant_educ_certificates_1 = $_POST['applicant_educ_certificates_1'];


    	$applicant_denomination = $_POST['applicant_denomination'];
    	// $applicant_work_experience = $_POST['applicant_work_experience'];

    	$applicant_work_employer_1 = $_POST['applicant_work_employer_1'];
    	$applicant_work_type_1 = $_POST['applicant_work_type_1'];
    	$applicant_work_to_1 = $_POST['applicant_work_to_1'];
    	$applicant_work_from_1 = $_POST['applicant_work_from_1'];
    	$applicant_work_title_1 = $_POST['applicant_work_title_1'];


    	$source_of_discovery = $_POST['source_of_discovery'];
    	$reason_for_study = $_POST['reason_for_study'];
    	$applicant_declaration = $_POST['applicant_declaration'];
    	// $parent_declaration = $_POST['parent_declaration'];


    	$personal_info_data = array();
    	$personal_info = array(
    		'f_name' =>$f_name,
    		's_name' =>$s_name,
    		'l_name' =>$l_name,
    		'dob' =>$dob,
    		'citizenship' =>$citizenship,
    		'birth_country' =>$birth_country,
    		'gender' =>$applicant_gender,
    		'marital_status' =>$marital_status,
    		'disability' =>$applicant_disability,
    		'disability_info' =>$applicant_disability_info,
    		'applicant_picture' =>$path
    		);
    	array_push($personal_info_data, $personal_info);
    	$this->db->insert_batch('applicant_personal_info',$personal_info_data);
    	$applicant_id = mysql_insert_id();

        $query = $this->db->query("INSERT INTO application_approvals VALUES(NULL, ".$applicant_id.", NULL)");
		//have a foreach where it stores
		$work_info_data = array();
		$work_info = array(
    		'applicant_id' =>$applicant_id,
    		'employer' =>$applicant_work_employer_1,
    		'work_type' =>$applicant_work_type_1,
    		'duration_from' =>$applicant_educ_duration_from_1,
    		'duration_to' =>$applicant_educ_duration_to_1,
    		'work_title' =>$applicant_work_title_1
    		);
    	array_push($work_info_data, $work_info);

    	// echo "<pre>";print_r($work_info_data);echo "</pre>";exit;

    	$this->db->insert_batch('applicant_work_info',$work_info_data);

    	$religion_info_data = array();
    	$religion_info = array(
    		'applicant_id' =>$applicant_id,
    		'denomination' =>$applicant_denomination
    		);
    	array_push($religion_info_data, $religion_info);
    	$this->db->insert_batch('applicant_religion_info',$religion_info_data);
    	
    	$guardian_info_data = array();
    	$guardian_info = array(
    		'applicant_id' =>$applicant_id,
    		'sponsor_names' =>$sponsor_names,
    		'sponsor_relation' =>$sponsor_relation,
    		'sponsor_telephone_no' =>$sponsor_telephone_no,
    		'sponsor_mobile_no' =>$sponsor_mobile,
    		'sponsor_email' =>$sponsor_email,
    		'sponsor_occupation' =>$sponsor_occupation,
    		'sponsor_postal_address' =>$sponsor_address,
    		'sponsor_monthly_income' =>$sponsor_monthly_income
    		);
    	array_push($guardian_info_data, $guardian_info);
    	$this->db->insert_batch('applicant_guardian_info',$guardian_info_data);

    	// echo("SUCCESS");exit;

		$education_info_data = array();
		$education_info = array(
    		'applicant_id' =>$applicant_id,
    		'yrs_of_english' =>$yrs_of_english_education,
    		'primary_level' =>$educ_primary_level,
    		'secondary_level' =>$educ_secondary_level,
    		'post_secondary' =>$educ_post_secondary,
    		'other_languages' =>$other_languages
    		);
    	array_push($education_info_data, $education_info);
    	$this->db->insert_batch('applicant_education_info',$education_info_data);

		$institution_info_data = array();
		$institution_info = array(
    		'applicant_id' =>$applicant_id,
    		'institution_name' =>$applicant_educ_institution_name_1,
    		'education_level' =>$applicant_educ_level_1,
    		'study_area' =>$applicant_educ_study_area_1,
    		'studied_from' =>$applicant_educ_duration_from_1,
    		'studied_to' =>$applicant_educ_duration_from_1,
    		'additional_certificates' =>$applicant_educ_certificates_1
    		);
    	array_push($institution_info_data, $institution_info);
    	$this->db->insert_batch('applicant_educational_institutions',$institution_info_data);

		$contact_info_data = array();
		$contact_info = array(
    		'applicant_id' =>$applicant_id,
    		'postal_Code' =>$applicant_postal_address,
    		'current_city' =>$applicant_city,
    		'email' =>$applicant_email,
    		'telephone' =>$applicant_telephone_no,
    		'office' =>$applicant_office_no,
    		'mobile_no' =>$applicant_mobile_no
    		);
    	array_push($contact_info_data, $contact_info);
    	$this->db->insert_batch('applicant_contact_info',$contact_info_data);

		$additional_info_data = array();
		$additional_info = array(
    		'applicant_id' =>$applicant_id,
    		'source_of_discovery' =>$source_of_discovery,
    		'reason_for_study' =>$reason_for_study,
    		'student_declaration' =>$applicant_declaration
    		);
    	array_push($additional_info_data, $additional_info);
    	$this->db->insert_batch('applicant_additional_info',$additional_info_data);

    	echo "Successful Entry of Applicant Information";
    }

    public function insert_into_db($table_name = null,$data = null){
    	
    	$this->db->insert_batch('$table_name',$data);
    	return "SUCCESS";
    }
}