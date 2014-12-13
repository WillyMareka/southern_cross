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
        $sql = "SELECT user_id FROM users WHERE username = '$username' AND password = '$sha1_password' ";

        //echo $sql;exit;
        $results = $this->db->query($sql);

        if ($results->num_rows() == 1)
        {    
            return $results->row(0)->user_id;
        }

        else
        {
            return "No credentials";
        }
    }

    function get_details($user_id){
        $sql = "SELECT * FROM users WHERE user_id = '$user_id'";

        $result= $this->db->query($sql);

        //$tester = $result->result_array();
        //echo "<pre>";print_r($tester);echo "</pre>"; exit;
        return $user_data = $result->result_array();

    }
}