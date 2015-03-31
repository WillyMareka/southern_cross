<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Student extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("student_model");
		$this->checkLogin('Student');
		// print_r($this->fetchuserdetails());die;	
		
	}

	public function index()
	{
		$this->load->view("student_home");
		
	}


}

?>