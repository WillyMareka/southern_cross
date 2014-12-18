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
		$this->checkLogin('ADMIN');
		
	}

	public function index()
	{
		$user_id = $this->session->userdata("user_id");
		$this->determine_staff_type($user_id);
	}


	public function determine_staff_type($user_id)
	{
		$this->load->model("staff_model");
		$data = $this->staff_model->get_staff_details($user_id);

		$role = $data[0]['role_name'];
		// echo "<pre>";print_r($role);echo "</pre>";die();
		switch ($role) {
			case 'Principal':
				// redirect("staff/principal");
				// break;
			case 'Dean of students':
				// redirect("staff/dean");
				// break;
			case 'Head of department':
				// redirect("staff/hod");
				// break;
			case 'Administrative Staff':
				// redirect("staff/administrative");
				// break;
			case 'Subordinate Staff':
				// redirect("staff/subordinate");
				// break;
		}

	}

	public function end_session()
	{
		$this->logout();
	}
}

?>