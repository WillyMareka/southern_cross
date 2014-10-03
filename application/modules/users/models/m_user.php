<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function check_login($username, $password)
    {
        $sha1_password = md5($password);
        $sql = "SELECT user_id FROM users WHERE username = ? AND password = ? ";

        $results = $this->db->query($sql, array($username, $sha1_password));


        if ($results->num_rows() == 1)
        {    
            return $results->row(0)->user_id;
        }

        else
        {
            return false;
        }
    }
}