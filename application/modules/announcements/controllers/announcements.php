<?php 

class Announcements extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_announcements');
    }
	function index()
	{
		
	}

	function announce(){
		$this->load->view('announcement');
	}

	function course_details()
	{
		$this->load->view('course_details');
	}
}