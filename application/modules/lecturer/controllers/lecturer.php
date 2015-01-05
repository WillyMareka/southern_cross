<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Lecturer extends MY_Controller
{
	public $get_userdetails;
	function __construct()
	{
		parent::__construct();
		$this->load->model("lecturer_model");
		$this->checkLogin('Lecturer');
		$this->get_userdetails = $this->fetchuserdetails();
		echo "<pre>";print_r($this->get_userdetails);die;
		
		
	}

	public function index()
	{
		
		
	}


}

?>