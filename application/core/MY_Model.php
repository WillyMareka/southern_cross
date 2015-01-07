<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function getalltables()
    {
      $table_columns = array();
      $query = $this->db->query("SHOW TABLES FROM scitm");
      $result = $query->result_array();

      foreach ($result as $key => $value) {

        $cols = array();
        $columns = $this->db->query("SHOW FIELDS FROM ".$value['Tables_in_scitm']);

      $c_result = $columns->result_array();

      foreach ($c_result as $k => $v) {
        $cols[$v['Field']] = $v;
      }

      $table_columns[$value['Tables_in_scitm']] = $cols;
      }

      

      return $table_columns;
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

      // $query = $this->db->query("SELECT count(id) as lecturers FROM lecturers");
      // $result = $query->result_array();
      $data['lecturers'] = 0;

      $query = $this->db->query("SELECT count(student_course_id) as students FROM student_course");
      $result = $query->result_array();
      $data['students'] = $result[0]['students'];

       $query = $this->db->query("SELECT count(course_id) as courses FROM courses");
       $result = $query->result_array();
       $data['courses'] = $result[0]['courses'];

       // echo "<pre>";print_r($data);die;
       return $data;
    }

    public function get_staffgroups()
    {
      $query = $this->db->query("SELECT * FROM staff_groups");
      $result = $query->result_array();

      return $result;
    }

    public function getssg()
    {
      $query = $this->db->query('SELECT * FROM staff_sub_groups ORDER BY ssg_id');

      $result = $query->result_array();

      return $result;
    }

    public function get_staffsubgroups($group_id)
    {
      $query = $this->db->query('SELECT * FROM staff_sub_groups WHERE sg_id = '.$group_id .' ORDER BY sg_id');

      $result = $query->result_array();

      return $result;
    }

    public function get_staff_searched($staff_id)
    {
      $query = "select * from
        (((`staff` `s`
        join `staff_ssg` `sssg` ON ((`sssg`.`staff_id` = `s`.`id`)))
        join `staff_sub_groups` `ssg` ON ((`ssg`.`ssg_id` = `sssg`.`ssg_id`)))
        join `staff_groups` `sg` ON ((`ssg`.`sg_id` = `sg`.`sg_id`)))
      WHERE s.id = " . $staff_id;
      $query = $this->db->query($query);
      $result = $query->result_array();

      return $result;
    }

     public function create_username($firstname, $surname, $othernames, $smasher)
    {
        $username = '';
        switch ($smasher) {
            case 1:
                $firstletter = substr($firstname, 0, 1);
                $username = $firstletter . $surname;
                break;
             case 2:
                $firstletter = substr($othernames, 0, 1);
                $username = $firstletter . $surname;
                break;
            case 3:
                $username = $firstname .'.'. $surname;
                break;
            case 4:
                $username = $othernames .'.'. $surname;
                break;
            case 5:
                $firstletter = substr($firstname, 0, 1);
                $secondletter = substr($othernames, 0, 1);
                $username = $firstletter . $secondletter . $surname;
                break;
            default:
                return false;
                break;
        }

        return $username;
    }

    public function checkusernameexists($username)
    {
        $query = $this->db->query("SELECT count(user_id) as users FROM users WHERE username = '" . $username . "'");
        $count = $query->row();

        if($count->users > 0)
        {
          return true;
        }
        else
        {
          return false;
        }
    }

    public function register_user($username, $utype)
    {
      $defult_password = md5('123456');
      $query = $this->db->query("INSERT INTO users VALUES(NULL, '".$username."', '".$defult_password."','".$utype."', NULL, 1)");

      if($query)
      {
        return mysql_insert_id();
      }
      else
      {
        return false;
      }
    }

    public function generate_staff_no($ssg_id)
    {
      $staff_no = '';
      $staff_code = '';
      $subgroups = $this->getssg();

      foreach ($subgroups as $key => $value) {
        if($value['ssg_id'] == $ssg_id)
        {
          $staff_code = $value['admission_code'];
        }
      }

      $query = $this->db->query("SELECT COUNT(staff_id) as numbers FROM staff_ssg WHERE ssg_id = " . $ssg_id);
      $count = $query->row();

      $staff_id = $count->numbers + 1;
      if($staff_id < 10)
      {
        $staff_id = '0' . $staff_id;
      }

      $year_of_admission = date("y");

      $staff_no = $staff_code . '/'. $staff_id . '/' . $year_of_admission;

      return $staff_no;
    }

    public function get_all_staff_details($user_id)
    {
      $sql = "SELECT *
                FROM `staff` `stf`
                LEFT JOIN `staff_ssg` `sssg`
                ON `sssg`.`staff_id` = `stf`.`id`
                LEFT JOIN `staff_sub_groups` `ssg`
                ON `sssg`.`ssg_id` = `ssg`.`ssg_id`
                WHERE `stf`.`user_id` = '$user_id'
                AND `sssg`.`is_current` = 1";
      $result = $this->db->query($sql);
      return $result->result_array();
    }

    public function get_ssgName($user_id)
    {
      $sql = "SELECT `ssg`.`ssg_name`
                FROM `staff` `stf`
                LEFT JOIN `staff_ssg` `sssg`
                ON `sssg`.`staff_id` = `stf`.`id`
                LEFT JOIN `staff_sub_groups` `ssg`
                ON `sssg`.`ssg_id` = `ssg`.`ssg_id`
                WHERE `stf`.`user_id` = '$user_id'
                AND `sssg`.`is_current` = 1";
      $result = $this->db->query($sql);
      return $result->result_array();
    }
}