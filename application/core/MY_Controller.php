<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends MX_Controller
{

	protected $cont_data = array();
	
	function __construct()
	{
		parent::__construct();
		
		
	}

	/*
	*Default template function
	*
	*/
	protected function template($data) {
		$this -> load -> module('template');
		$this -> template ->load_template($data);
	}

	/*
	*
	*Use md5 and key to hash strings
	*
	*/
	protected function my_hash($data=null){

		$key = $this -> encrypt -> get_key();
		$encrypted_data = $key . $data;
		$data = md5($encrypted_data);
		return $data;
		
	}
}




?>