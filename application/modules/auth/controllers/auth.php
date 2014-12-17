<?php if (! defined("BASEPATH")) exit('No direct script access allowed');

class Auth extends MY_Controller
{
	var $applicant_row, $counts;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_auth');
    }
	function index()
	{
		$this->logout();
		$this->load->view('auth');
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$hashed_password = md5($password);

		$authentication = $this->m_auth->getUser($username, $hashed_password);

		if($authentication['auth'] == TRUE)
		{
			$user_id = $authentication['user_id'];
			$user_type = $authentication['usertype'];
			$user_details = $this->userdetails($user_id, $user_type);
			$redirect_url = $this->getRedirect($user_type);
			$data = array(
				'logged_in' => TRUE,
				'userid' => $user_id,
				'usertype' => $user_type
			);

			$this->session->set_userdata($data);
			// echo "<pre>";print_r($this->session->all_userdata());die;

			redirect(base_url() . $redirect_url);
		}
		else
		{
			echo "No User Found";
		}
	}

	function getRedirect($usertype)
	{
		$redirections = array('ADMIN' => 'admin', 'Lecturer' => 'lecturer', 'Student' => 'student');

		foreach ($redirections as $key => $value) {
			if ($key == $usertype) {
				return $value;
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
	}
}

