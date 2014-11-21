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
			$username = 'MarekaWilly';
			$password = 'mareks';

			$user_id = $this->m_user->check_login($username, $password);

			echo $user_id;
	}

	function check_type($user_id = null){
		// echo "This".$user_id;exit;
		$user_details =$this->m_user->get_details($user_id); 
		echo "<pre>";print_r($user_details[0]['user_type']);echo "</pre>"; exit;
		switch ($user_details[0]['user_type']) {
			case 'super_admin':
				// echo "Successful admin login";
				$data['user_details']=$user_details;
				$data['content_view'] = "admin/application_view";
				$data['application'] = $this->m_admin->applications();
				
				$this->load->view('admin/admin_view', $data);
				break;
			case 'staff':
				// echo "Successful staff login";
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
	}
}