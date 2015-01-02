<?php if (! defined("BASEPATH")) exit('No direct access allowed');

class Template extends MY_Controller
{
	var $userdata = '';
 
 function __construct()
 {
 	parent::__construct();
 	$utype = $this->session->userdata('usertype');
 	$uid = $this->session->userdata('userid');
 	$this->userdata = $this->userdetails($uid, $utype);


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
 	foreach ($this->userdata[0] as $key => $value) {
 		$data[$key] = $value;
 	}
 	$this->load->view('lecturer_template', $data);
 }

}
?>