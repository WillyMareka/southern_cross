<?php 

class Staff_model extends MY_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

  //  public function get_staff_details($user_id)
  //  {
  //  		$sql = "SELECT * 
		// 			FROM 
		// 				`staff` `stf`
		// 			LEFT JOIN `users` `usr`
		// 				ON `stf`.`user_id` = `usr`.`user_id`
		// 				LEFT JOIN `staff_roles` `stfr`
		// 					ON `stf`.`staff_role_id` = `stfr`.`role_id`
		// 			WHERE `usr`.`user_id` = '$user_id'";

		// $result = $this->db->query($sql);

  //       return $result->result_array();
  //  }
}