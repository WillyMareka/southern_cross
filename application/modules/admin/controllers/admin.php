<?php if (! defined("BASEPATH")) exit('No direct script access allowed');

/**
* 
*/
class Admin extends MY_Controller
{
	
	function __construct()
	{
		$this->cont_data['content_view']	=	"admin_view";
		$this->cont_data['heading']			=	"Administrator";
		$this->cont_data['sidebar']			=	"admin_side";
		$this->cont_data['title']			=	"CRS";
	}

	public function index()
	{
		$this->template($this->cont_data);
		$this->load->view('admin_view');
	}
}

?>