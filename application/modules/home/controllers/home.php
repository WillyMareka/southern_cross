<?php if (! defined("BASEPATH")) exit("No direct access to scripts is allowed");
	
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->load->view('home_view');
		}
	}
?>