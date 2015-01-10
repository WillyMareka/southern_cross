<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class resource extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("staff_model");
		$this->checkLogin('staff');
		$this->checkStaff('human resource');
		
	}

	public function index()
	{
		
	}


}

?>