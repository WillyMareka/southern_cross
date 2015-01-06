<?php 

class Lecturer_model extends MY_Model
{
	var $frags, $id, $attr, $elements, $noofinsertbatch;
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function getcountdetails($lec_id)
	{
		$query = $this->db->query("SELECT COUNT(unit_id) as units FROM groups WHERE active = 1 AND staff_id = " . $lec_id);
		$result = $query->result_array();
		return $result;
	}

	function getlecturernumber($lec_id)
	{
		$query = $this->db->query("SELECT staff_no FROM staff_ssg WHERE is_current = 1 AND staff_id = " . $lec_id);
		$result = $query->row();

		if($result)
		{
			return $result->staff_no;
		}
		else
		{
			return 'None';
		}
	}

	function getmarkdetails($group_id = NULL, $assessment = NULL)
	{
		$query = $this->db->query("SELECT st.student_course_id, st.student_id, ap.f_name, ap.l_name, sm.attained_marks, a.totalmarks
		FROM student_groups sg
		JOIN student_course st ON st.student_course_id = sg.student_id
		LEFT JOIN student_marks sm ON sm.student_id = st.student_course_id
		JOIN applicant_personal_info ap ON ap.applicant_id = st.applicant_id
		JOIN groups g ON g.group_id = sg.group_id
		JOIN group_assessments a ON a.group_id = g.group_id
		WHERE g.group_id = " . $group_id . "
		AND a.assessment_id = " . $assessment ."
		AND sm.assessment_id = " . $assessment);

		$result = $query->result_array();
		return $result;
	}

	function getlecturerunits($lec_id)
	{
		$query = $this->db->query("SELECT g.group_id, u.unit_name, c.course_short_code
									FROM units u
									JOIN groups g ON g.unit_id = u.unit_id
									JOIN courses c ON c.course_id = g.course_id
									JOIN staff s ON s.id = g.staff_id
									WHERE s.id = " . $lec_id . " AND g.active = 1");
		$result = $query->result_array();

		return $result;
	}

	function getassessments($group_id)
	{
		$query = $this->db->query("SELECT a.assessment_id, a.assessment_name FROM group_assessments a
				JOIN groups g ON g.group_id = a.group_id
				WHERE g.active = 1
				AND g.group_id = " . $group_id);

		$result = $query->result_array();

		return $result;
	}

	function getdetailsbyid($group_id, $assessment)
	{
		$data = array();
		$query = $this->db->query("SELECT u.unit_name, a.assessment_name, c.course_short_code FROM units u
			JOIN groups g ON g.unit_id = u.unit_id
			JOIN group_assessments a ON a.group_id = g.group_id
			JOIN courses c ON c.course_id = g.course_id
			WHERE g.group_id = " . $group_id . " AND a.assessment_id = " . $assessment);
		$result = $query->result_array();
		if ($result) {
			foreach ($result as $key => $value) {
				$data['course_short_code'] = $value['course_short_code'];
				$data['unit'] = $value['unit_name'];
				$data['assessment'] = $value['assessment_name'];
			}
		}

		return $data;
	}

	function updatemarks()
	{
		$count = $finalCount = 1;
		$alternative = array();
		// echo "<pre>";print_r($this->input->post());die;
		foreach ($this->input->post() as $key => $value) {
			if(strrpos($key, 'student') !== FALSE)
			{
				$this->frags = explode('_', $key);
				$this->id = $count;
				$this->attr = $this->frags[0];

				if($this->attr == 'studentid')
				{
					$finalCount = $count;
					$count++;
				}
				if(($this->attr == 'studentgroup') || ($this->attr == 'studentassessment'))
				{
					$alternative[$this->attr] = $value;
				}
				else
				{
					if(!empty($value))
					{
						$this->elements[$this->id][$this->attr] = $value;
					}
					else
					{
						$this->elements[$this->id][$this->attr] = 0;
					}
				}
			}
		}

		$this->noofinsertbatch = $finalCount;
		$counter = 0;
		for ($i=1; $i <= $this->noofinsertbatch; $i++) {
			$insert_array = array(); 
			$insert_array['student_id'] = (array_key_exists('studentid', $this->elements[$i])) ? $this->elements[$i]['studentid'] : 0 ;
			$insert_array['assessment_id'] = (array_key_exists('studentassessment', $alternative)) ? $alternative['studentassessment'] : 0 ;
			$insert_array['attained_marks'] = (array_key_exists('studentmark', $this->elements[$i])) ? $this->elements[$i]['studentmark'] : 0 ;

			$result = $this->db->insert('student_marks', $insert_array);

			if(!$result)
			{
				return false;
			}
		}

		return true;

	}
}