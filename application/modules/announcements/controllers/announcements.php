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
		$this->load->view('announcement');
	}
}