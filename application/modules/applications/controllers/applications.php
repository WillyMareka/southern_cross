<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applications extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_applications');
	}
	function index(){
		// $this->load->view('v_application');
	}

	function short_courses(){
      $this->load->view('short_courses_form');
	}

	function masters(){
      $this->load->view('masters_form');
	}

	function certificate(){
      $this->load->view('certificate_form');
	}

	function diploma(){
		$data['course'] = $this->createCoursesSection();
      $this->load->view('diploma_form', $data);
	}

	function application_submit(){
		/*
		$path = '';
		$config['upload_path'] = './applicant_data/applicant_pictures/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		// print_r($this->upload->do_upload('applicant_picture'));die;
		if ( ! $this->upload->do_upload('applicant_picture'))
		{
			$error = array('error' => $this->upload->display_errors());
			// print_r($error);die;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			// print_r($data);exit;
			foreach ($data as $key => $value) {
				$path = base_url().'applicant_data/applicant_pictures/'.$value['file_name'];
			}
			// echo "THIS WORkS".$path;die;

			$value = $this->m_applications->add_applicant();
			echo $value;die;

		}
		*/
		$result = $this->m_applications->add_applicant();
		//echo $result;die;
		if ($result['success']=1) {
			$data['application_status'] = 1;
		}else{
			$data['application_status'] = 2;//failed application submission
		}
		$this->load->view('home/home',$data);
		// echo "<pre>";print_r($result);echo "<pre>";exit;
		// redirect(base_url().'home');

		//echo "Success!";die;
	}

	function createCoursesSection()
	{
		$course_list = '';

		$courses = $this->m_applications->getCourses();

		foreach ($courses as $course) {
			$course_list .= '<option value = "'.$course['course_id'].'">'.$course['course_name'].'</option>';
		}

		return $course_list;
	}

}