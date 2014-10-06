<?php if (! defined("BASEPATH")) exit('No direct script access allowed');

/**
* 
*/
class Admin extends MY_Controller
{
	
	function __construct()
	{
		// $this->cont_data['content_view']	=	"admin_view";
		// $this->cont_data['heading']			=	"Administrator";
		// $this->cont_data['sidebar']			=	"admin_side";
		// $this->cont_data['title']			=	"CRS";
		$this->load->model('m_admin');
	}

	public function index()
	{
		//$this->template($this->cont_data);
		$data['content_view'] = 'application_view';
		$data['application'] = $this->m_admin->applications();
		$this->load->view('admin_view', $data);
	}

	public function application()
	{
		$data['content_view'] = 'application_view';
		$data['application'] = $this->m_admin->applications();
		$this->load->view('admin_view', $data);
	}

	function form()
	{
		$data['content_view'] = 'application_form';
		$data['courses'] = $this->m_admin->get_courses();
		$this->load->view('admin_view', $data);	
	}

	function submit_application()
	{
		$path = '';
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		//print_r($this->upload->do_upload('photos'));die;
		if ( ! $this->upload->do_upload('photos'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);die;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$path = base_url().'upload/'.$value['file_name'];
			}

			$this->m_admin->add_application($path);
			redirect('admin/application');
			// echo "Success!";die;
		}
	}

	function activate($id)
	{

		$sql = "UPDATE
						`applications`
					SET
						`status` = 2
					WHERE 
						`id` = '$id'";

		$this->db->query($sql);

		
			$this->application();
			redirect('admin/application');
		
	
	}

	function deactivate($id)
	{

		$sql = "UPDATE
						`applications`
					SET
						`status` = 3
					WHERE 
						`id` = '$id'";

		$this->db->query($sql);

		
		$this->application();
		
	
	}
}

?>