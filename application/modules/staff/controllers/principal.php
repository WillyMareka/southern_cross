<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Principal extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("staff_model");
		$this->checkLogin('Staff');
		$this->checkStaff('Principal');
		// $data = $this->staff_model->get_all_staff_details($this->session->userdata("userid"));
		// Should be changed to checkStaffLogin due to the different structure of the staff
		
	}

	public function index()
	{
		$data['content_view'] = "p_dashboard";
		$data['menu'] = "principal_menu";
		$data['school'] = $this->config->item('institution');
		$data['userdetails'] = $this->staff_model->get_all_staff_details($this->session->userdata("userid"));
		

		// echo "<pre>";print_r($data);echo "</pre>";die();

		$this->load->view("staff_v", $data);
	}

	public function principal($fn)
	 {
	 	if ($fn == 1) {
	 		$this->view_hod();
	 	} elseif ($fn == 2) {
	 		# code...
	 	} elseif ($fn == 3) {
	 		# code...
	 	}
	}

	 public function view_hod()
	 {
	 	$data['content_view'] = "p_hod_view";
		$data['menu'] = "principal_menu";
		$data['school'] = $this->config->item('institution');
		$data['userdetails'] = $this->staff_model->get_all_staff_details($this->session->userdata("userid"));

	 	$this->load->view("staff_view", $data);
	 }


}

?>