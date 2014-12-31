<?php if (! defined("BASEPATH")) exit('No direct access allowed');

class Template extends MY_Controller
{
 
 function __construct()
 {
 	parent::__construct();

 }	

 public function index($data)
 {
 	$this->load_template($data);
 }

 public function load_template($data)
 {
 	$this->load->view('flat_template', $data);
 }

 public function load_lecturer_template($data)
 {
 	$data['messages'] = 5;
 	$this->load->view('lecturer_template', $data);
 }

}
?>