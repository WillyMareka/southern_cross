<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function applications()
    {
    	$sql = "SELECT * FROM `applications`";

    	$apps = $this->db->query($sql);
    	
    	return $apps->result_array();
    }

   
}