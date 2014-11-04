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

		$data['application'] = $this->m_admin->applications();
		

		$this->load->view('admin_view', $data);
	}

	function register()
	{
		$data['content_view'] = "registercourse";
		$this->load->view('admin_view', $data);
	}

	public function register_lecturers()
	{
		//echo"<pre>"; print_r($this->input->post());echo "</pre>"; die;
		$path = '';
		$config['upload_path'] = './applicant_data/lecturer_pictures/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		//print_r($this->upload->do_upload('photos'));die;
		if ( ! $this->upload->do_upload('lec_photo'))
		{
			$error = array('error' => $this->upload->display_errors());
			//print_r($error);die;
			$data['reg_status'] = "Please select a gif|jpg|png|jpeg image to upload before submission.";
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$path = base_url() .'applicant_data/lecturer_pictures/'.$value['file_name'];
			$this->m_admin->add_lecturer($path);
		$data['reg_status'] = "Registry of Lecturer was successful.";
			}
			//echo $path."  SUCCESS";exit;


        $data['courses']=$this->m_admin->get_courses();
        $data['content_view'] = "add_lecturer_page";

        $this->load->view("admin_view",$data);
		}
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

			$this->m_admin->addStaff($path);
			redirect('admin/add_staff');
			// echo "Success!";die;
		}
	}

	public function add_lecturer(){
		$data['courses']=$this->m_admin->get_courses();
		$data['content_view']="add_lecturer_page";
		$data['reg_status']='No lecturer registered today';

		$this->load->view("admin_view",$data);
	}

	public function edit_application()
	{
		$id = $this->input->post('editid');
		$status = $this->input->post('editstatus');
		
		$sql = "UPDATE
					`applicant_personal_info`
				SET
					`status` = '$status'
				WHERE
					`applicant_id` = '$id'";
		$this->db->query($sql);

		$this->index();
		
	}
	
	public function ss_applicants_details($id)
	{

		$info = $this->m_admin->applications($id);

		$this->load->view("admin_view", $data);
	}
}

