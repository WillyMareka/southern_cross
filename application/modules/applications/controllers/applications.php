<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applications extends MX_Controller
{
	function index(){
		// $this->load->view('v_application');
	}

	function doctoral(){
      $this->load->view('doctoral_form');
	}

	function masters(){
      $this->load->view('masters_form');
	}

	function bachelor(){
      $this->load->view('bachelor_form');
	}

	function undergraduate(){
      $this->load->view('undergradate_form');
	}

}