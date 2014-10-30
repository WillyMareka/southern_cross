<<<<<<< HEAD
<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
=======
<?php 
>>>>>>> 21fd725f555a335ed8bf056df86302b9cc161534

class Admin extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('m_admin');
    }
	function index()
	{
		$data['content_view'] = "application_view";
		$data['application'] = $this->m_admin->applications();
		$this->load->view('admin_view', $data);
	}

	function register()
	{
		$data['content_view'] = "registercourse";
		$this->load->view('admin_view', $data);
	}

	public function view_staff_page()
	{
		$data['content_view'] = "view_staff_page";
		$data['application'] = $this->m_admin->applications();
		$data['staff'] = $this->m_admin->get_staff();

		$this->load->view("admin_view", $data);
	}

	public function add_staff()
	{
		$data['content_view'] = "add_staff_page";

		$this->load->view("admin_view", $data);
	}

	public function register_employees()
	{
		// print_r($this->input->post());die;
		$path = '';
		$config['upload_path'] = './applicant_data/applicant_pictures/';
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
				$path = base_url() .'applicant_data/applicant_pictures/'.$value['file_name'];
			}

			$this->m_admin->addStaff($path);
			redirect('admin/add_staff');
			// echo "Success!";die;
		}
	}

	public function edit_application()
	{
		
	}
	
	public function ss_applicants_details($id)
	{
		
	}
<<<<<<< HEAD
}

?>
=======

	
}
>>>>>>> 21fd725f555a335ed8bf056df86302b9cc161534
