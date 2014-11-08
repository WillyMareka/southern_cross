<?php if (! defined("BASEPATH")) exit('No direct script access allowed');

class Admin extends MY_Controller
{
	var $applicant_row;
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
		$data['application'] = $this->createApplications();
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

	public function createApplications()
	{
		$this->applicant_row = '';
		$applicants = $this->m_admin->applications();
		$counter = 0;
		foreach ($applicants as $key => $value) {
			$counter++;
			$this->applicant_row .= '<tr>';
			$this->applicant_row .= '<td>'.$counter.'</td>';
			$this->applicant_row .= '<td>'.$value['f_name'].'</td>';
			$this->applicant_row .= '<td>'.$value['s_name'].'</td>';
			$this->applicant_row .= '<td>'.$value['l_name'].'</td>';
			$this->applicant_row .= '<td>'.$value['citizenship'].'</td>';
			$this->applicant_row .= '<td>'.strtoupper($value['gender']).'</td>';
			$this->applicant_row .= '<td>'.date("d-m-Y", strtotime($value['dob'])).'</td>';
			$this->applicant_row .= '<td><a href = "'.base_url().'">Active</a></td>';
			$this->applicant_row .= '<td><a href = "'.base_url().'admin/viewapplicantdetails/'.$value['applicant_id'].'">View More</a></td>';
			$this->applicant_row .= '<tr>';
		}

		return $this->applicant_row;
	}

	public function viewapplicantdetails($a_id)
	{
		$applicant_array = $this->getapplicantdetails($a_id);
		$data['content_view'] = "applicant_view";
		$data['application'] = $applicant_array;
		$data['education'] = $this->m_admin->getApplicantInstitutions($a_id);
		$this->load->view('admin_view', $data);
	}
	public function getapplicantdetails($applicant_id)
	{
		$applicant_details = array();
		$applicants = $this->m_admin->applications();
		foreach ($applicants as $applicant) {
			if($applicant['applicant_id'] == $applicant_id)
			{
				$applicant_details = $applicant;
			}
		}

		return $applicant_details;
	}
	
}

