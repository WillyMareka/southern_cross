<?php if (! defined("BASEPATH")) exit('No direct script access allowed');

class Admin extends MY_Controller
{
	var $applicant_row, $counts;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('m_admin');
        $this->counts = $this->m_admin->getAdminCounts();
        $this->checkLogin('ADMIN');
        $this->get_userdetails = $this->fetchuserdetails();
    }
	function index()
	{
		$data['content_view'] = "new_dashboard";
		$data['counts'] = $this->counts;
		$data['pagetitle'] = "Administrator Dashboard";
		$data['pagedescription'] = "The Administrator's home page";

		$this->load->view('template/londonium_template', $data);
	}

	public function applications()
	{
		$data['content_view'] = "application_view";
		$data['pagetitle'] = "Applications";
		$data['pagedescription'] = "Student Applications";
		$data['application'] = $this->createApplications();
		

		$this->load->view('template/londonium_template', $data);
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

		// $data['application'] = $this->m_admin->applications();

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

    }
	public function createApplications()
	{

		// $this->applicant_row = '';
		$applicants = $this->admin_model->student_applications();
		// print_r($applicants);die();
		$counter = 0;
		$this->applicant_row .= "
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Second Name</th>
				<th>Last Name</th>
				<th>Citizenship</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th colspan = '2'>Action</th>
			</tr>
		</thead>
		<tbody>";
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
		$this->applicant_row .= '</tbody>';
		

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
		$applicants = $this->admin_model->student_applications();
		foreach ($applicants as $applicant) {
			if($applicant['applicant_id'] == $applicant_id)
			{
				$applicant_details = $applicant;
			}
		}

		return $applicant_details;
	}

	public function acceptApplicant($a_id)
	{
		$applicant_details = $this->getapplicantdetails($a_id);

		$course_short_code = $applicant_details['course_short_code'];
		$intake = $applicant_details['intake'];

		$admission_month = date("m");

		$students_in_course = $this->m_admin->getCourseById($course_short_code);
		$noofstudents = count($students_in_course);
		$noofstudents++;

		if($noofstudents < 10)
		{
			$noofstudents = '00' . $noofstudents;
		}
		else if($noofstudents < 100)
		{
			$noofstudents = '0' . $noofstudents;
		}

		$student_no = $course_short_code .'/' . $noofstudents . '/' . $admission_month . '/' . $intake;

		$saved = $this->m_admin->save_student($student_no, $course_short_code, $a_id);

		redirect("admin");

		$this->load->view("admin_view", $data);

	}

	public function getApplicants()
	{
		$applicants = $this->admin_model->student_applications();


		echo json_encode($applicants);
	}

}

