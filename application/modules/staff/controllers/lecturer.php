<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Lecturer extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->checkLogin('Staff');
		$this->load->model("staff_model");
		
		
	}

	function index()
	{
		$data['title'] = 'Dashboard';
		$data['icon'] = 'ion-home';
		$data['content_view'] = 'staff/lecturer/dashboard';
		$this->template->load_lecturer_template($data);
	}

	function units()
	{
		$data['title'] = 'My Units';
		$data['icon'] = 'ion-ios-book-outline';
		$data['content_view'] = 'staff/lecturer/units';
		$this->template->load_lecturer_template($data);
	}

	function students()
	{
		$data['title'] = 'My Students';
		$data['icon'] = 'ion-android-people';
		$data['content_view'] = 'staff/lecturer/students';
		$this->template->load_lecturer_template($data);
	}

	function elearning()
	{
		$data['title'] = 'E-Learning';
		$data['icon'] = 'fa fa-book';
		$data['content_view'] = 'staff/lecturer/elearning';
		$this->template->load_lecturer_template($data);
	}

	function assessment()
	{
		$data['title'] = 'Assessment';
		$data['icon'] = 'fa fa-sort-numeric-desc';
		$data['content_view'] = 'staff/lecturer/assessment';
		$this->template->load_lecturer_template($data);
	}

	function mailbox()
	{
		$data['title'] = 'Mailbox';
		$data['icon'] = 'fa fa-inbox';
		$data['content_view'] = 'staff/lecturer/mailbox';
		$this->template->load_lecturer_template($data);
	}
}