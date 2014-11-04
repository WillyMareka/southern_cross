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

	function doctoral(){
      $this->load->view('doctoral_form');
	}

	function masters(){
      $this->load->view('masters_form');
	}

	function bachelor(){
      $this->load->view('bachelor_form');
	}

	function diploma(){
      $this->load->view('diploma_form');
	}

	function application_submit(){
		
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

			$value = $this->m_applications->add_applicant($path);
			echo $value;die;

		}

		redirect(base_url().'home');

		// echo "Success!";die;
	}

}