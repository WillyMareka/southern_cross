<?php if (! defined("BASEPATH")) exit('No direct script access allowed');
/**
* 
*/
class Lecturer extends MY_Controller
{
	var $id=0;
	
	function __construct()
	{
		parent::__construct();
		$this->checkLogin('Staff');
		$this->load->model("lecturer_model");
		$this->id = $this->session->userdata('id');
		
		
	}

	function index()
	{
		$data['staff_no'] = $this->lecturer_model->getlecturernumber($this->session->userdata('id'));
		$data['title'] = 'Dashboard';
		$data['units'] = $this->lecturer_model->getcountdetails($this->session->userdata('id'))[0]['units'];
		$data['icon'] = 'ion-home';
		$data['content_view'] = 'staff/lecturer/dashboard';
		$this->template->load_lecturer_template($data);
	}

	function units()
	{
		$data['title'] = 'My Units';
		$data['icon'] = 'ion-ios-book-outline';
		$data['content_view'] = 'staff/lecturer/units';
		$this->template->load_lecturer_template($data);
	}

	function students()
	{
		$data['title'] = 'My Students';
		$data['icon'] = 'ion-android-people';
		$data['content_view'] = 'staff/lecturer/students';
		$this->template->load_lecturer_template($data);
	}

	function elearning()
	{
		$data['title'] = 'E-Learning';
		$data['icon'] = 'fa fa-book';
		$data['content_view'] = 'staff/lecturer/elearning';
		$this->template->load_lecturer_template($data);
	}

	function assessment()
	{
		$tables = $this->createmarkstable();
		$data['title'] = 'Assessment';
		$data['mark_assessment'] = $tables['table_row'];
		$data['group_id'] = $tables['group_id'];
		$data['assessment_id'] = $tables['assessment_id'];
		$data['max'] = $tables['out_of'];
		$data['table_title'] = $tables['unit'] . ' - ' .$tables['course_short_code']. ' ' . $tables['assessment'];
		$data['icon'] = 'fa fa-sort-numeric-desc';
		$data['content_view'] = 'staff/lecturer/assessment';
		$this->template->load_lecturer_template($data);
	}

	function mailbox()
	{
		$data['title'] = 'Mailbox';
		$data['icon'] = 'fa fa-inbox';
		$data['content_view'] = 'staff/lecturer/mailbox';
		$this->template->load_lecturer_template($data);
	}

	function account()
	{
		$data['title'] = 'Account';
		$data['icon'] = 'ion-settings';
		$data['content_view'] = 'staff/lecturer/account';
		$this->template->load_lecturer_template($data);
	}
	function createmarkstable()
	{
		$details = array();
		$table_row = '';
		if($_POST)
		{
			$group_id = $this->input->post('unit');
			$assessment = $this->input->post('assessment');
			$markdetails = $this->lecturer_model->getmarkdetails($group_id, $assessment);
			$details = $this->lecturer_model->getdetailsbyid($group_id, $assessment);
			$details['group_id'] = $group_id;
			$details['assessment_id'] = $assessment;

			if($markdetails)
			{

				$counter = 1;
				foreach ($markdetails as $key => $value) {
					$table_row .= '<tr>';
					$table_row .= '<td>'.$counter.'</td>';
					$table_row .= '<td>'.$value['student_id'].'</td>';
					$table_row .= '<td>'.$value['f_name'].'</td>';
					$table_row .= '<td>'.$value['l_name'].'</td>';
					$table_row .= '<td><input type = "text" class = "number" name = "studentmark_'.$counter.'" value = "'.$value['attained_marks'].'"/> / '.$value['totalmarks'].'</td>';
					$table_row .= '<input type = "hidden" name = "studentid_'.$counter.'" value = "'.$value['student_course_id'].'">';
					$table_row .= '</tr>';
					$counter++;

					$details['out_of'] = $value['totalmarks'];
				}
			}
			$details['table_row'] = $table_row;
		}
		else
		{
			$details['course_short_code'] = '';
			$details['unit_name'] = '';
			$details['assessment'] = '';
			$details['table_row'] = '';
			$details['out_of'] =0;
			$details['group_id'] = 0;
			$details['assessment_id'] = 0;
		}
		return $details;
	}

	function createunitscombo($lec_id)
	{
		$data = array();
		$units = $this->lecturer_model->getlecturerunits($lec_id);
		if($units)
        {
            foreach ($units as $key => $value) {
                $data[] = array('id' => $value['group_id'], 'text' => $value['unit_name'] .'-'. $value['course_short_code']);
            }
        }
       echo json_encode($data);
	}

	function assessmentcombo($group_id)
	{
		$assessments = $this->lecturer_model->getassessments($group_id);
		if($assessments)
		{
			foreach ($assessments as $key => $value) {
				$data[] = array('id'=>$value['assessment_id'], 'text' => $value['assessment_name']);
			}
		}
		else
		{
			$data = array();
		}
		echo json_encode($data);
	}

	function updatemarks()
	{
		$result = $this->lecturer_model->updatemarks();
		echo "True";die;
	}
}