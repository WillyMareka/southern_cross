<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getUser($username, $password)
    {
    	$user = array();
    	$query = $this->db->get_where('users', array('username' => $username, 'password' => $password, 'is_active' => 1), 1);
    	$details = $query->result_array();

    	if($details)
    	{
    		$user['auth'] = TRUE;
    		$user['user_id'] = $details[0]['user_id'];
    		$user['usertype'] = $details[0]['user_type'];
    	}
    	else
    	{
    		$user['auth'] = FALSE;
    	}

    	// echo "<pre>";print_r($user);die;
    	return $user;
    }

    public function staff_usertype($staff_id)
    {
        $query = $this->db->query("SELECT r.redirect as redirection 
            FROM staff_ssg s
            JOIN staff_redirect r ON r.ssg_id = s.ssg_id
            WHERE s.staff_id = " . $staff_id . " AND s.is_current = 1 LIMIT 1");
        $usertype = $query->row();

        return $usertype->redirection;
    }
   
}