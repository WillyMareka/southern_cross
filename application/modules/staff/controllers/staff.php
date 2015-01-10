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
		$this->checkLogin('staff');
		
	}

	public function index()
	{
		$user_id = $this->session->userdata("userid");
		$this->determine_staff_type($user_id);
	}


	public function determine_staff_type($user_id)
	{
		$data = $this->staff_model->get_all_staff_details($user_id);
		// echo "<pre>";print_r($data);echo "</pre>";die();
		$role = strtolower($data[0]['ssg_name']);
		$redirection ="staff/".$role;
		switch ($role) {
			case 'principal':
				redirect(base_url().$redirection);
				break;
			case 'deputy principal':
				redirect(base_url().'principal');
				break;
			case 'dean of students':
				redirect(base_url().$redirection);
				break;
			case 'head of department':
				redirect(base_url().$redirection);
				break;
			case 'administrative':
				redirect(base_url().$redirection);
				break;
			case 'subordinate':
				redirect(base_url().$redirection);
				break;
		}

	}

	public function end_session()
	{
		$this->logout();
	}
}

?>