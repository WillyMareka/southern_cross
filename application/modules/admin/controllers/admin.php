<?php 

class Admin extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('admin_model');
    }
	function index()
	{
	}
}