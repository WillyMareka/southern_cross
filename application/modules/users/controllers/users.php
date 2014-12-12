<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('admin/admin_model');
        $this->load->model('admin/m_admin');
        //this is some random change
    }


	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect(base_url() . 'home');
		}
		else
		{
			$this->login();
		}
		//$this->load->model('m_user');
	}

	function mainpage()
	{
		redirect(base_url() . 'home');
	}

	
	function login()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->m_user->check_login($username, $password);

			// if ($user_id = false) {
			// 	echo "NOPE. NOPE NOPE NOPE.";exit;
			// }
			//$this->check_type($user_id);

			echo $user_id;
	}

	function check_type($user_id){
		
		$user_details =$this->m_user->get_details($user_id); 

		// echo "<pre>";print_r($user_details[0]['user_type']);echo "</pre>"; exit;
		switch ($user_details[0]['user_type']) {
			case 'super_admin':
				// echo "Successful admin login";
				$data['user_details']=$user_details;
				$data['content_view'] = "admin/dashboard";
				$data['application'] = $this->m_admin->applications();
				
				$this->load->view('admin/admin_view', $data);
				break;
			case 'staff':
				$data["user_id"] = $user_details[0]["user_id"];
				$data["username"] = $user_details[0]["username"];

				$this->session->set_userdata($data);
				redirect("staff");
				break;
			case 'lecturer':
				// echo "Successful lecturer login";
				break;
			case 'student':
				// echo "Successful student login";
				break;
			default:
				# code...
				break;
		}
		//random change
	}
}