<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Staff extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("staff_model");
	}

	public function index()
	{
		$data['content_view'] = "dashboard";
		$data['loggedinas '] = "Staff Member";

		$this->load->view("staff_view", $data);
	}
}

?>