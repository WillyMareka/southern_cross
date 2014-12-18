<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Principal extends MY_Controller
{
	
	function __construct($value=NULL)
	{
		parent::__construct();
		$this->load->model("staff_model");
		
		
	}

	public function index($value=NULL)
	{
		if ($value == NULL) {
			redirect('home');
			// print_r($value);die();
		}elseif ($value != NULL) {
			$this->index_page();
		}
		
	}

	public function index_page()
	{
		
		$data['content_view'] = "p_dashboard";
		$data['menu'] = "principal_menu";
		$data['loggedinas'] = "School Principal";
		$data['username'] = $this->session->userdata("username");

		// echo "<pre>";print_r($data);echo "</pre>";die();

		$this->load->view("staff_view", $data);
	}

	
	 public function principal($fn)
	 {
	 	switch ($fn) {
	 		case 1:
	 			
	 			break;
	 		case 2:
	 			
	 			break;
	 		case 3:
	 			
	 			break;
	 		case 4:
	 			
	 			break;
	 	}
	 }


}

?>