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
   
}