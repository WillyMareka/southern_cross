<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Dean extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("staff_model");
		
		
	}

	public function index()
	{
		
		$data['content_view'] = "d_dashboard";
		$data['menu'] = "dean_menu";
		$data['loggedinas'] = "Dean Of Students";
		$data['username'] = $this->session->userdata("username");

		// echo "<pre>";print_r($data);echo "</pre>";die();

		$this->load->view("staff_view", $data);
	}


}

?>