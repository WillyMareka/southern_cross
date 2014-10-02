<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends MX_Controller
{
	function index()
	{
		$this->load->view('v_courses');
		
	}
}