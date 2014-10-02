<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller
{

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
		if ($this->input->post() == false) 
		{
			$this->load->view('login_page');
		}
		else
		{
			$this->load->model('m_user');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->m_user->check_login($username, $password);

			if (!$user_id) {
				//Log In Failed
				echo "False";
			}

			else
			{
				//Log In Successful
				$userdata = array(
					'logged_in' => TRUE, 
					'user_id' => $user_id,
					'username' => $username,
				);
				$this->session->set_userdata($userdata);
				// redirect('users/mainpage');
				echo "True";
			}
		}
	}
}