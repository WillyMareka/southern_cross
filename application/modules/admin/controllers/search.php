<?php if (! defined("BASEPATH")) exit('No direct script access allowed');

class Search extends MY_Controller
{
	var $applicant_row, $counts;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->module('admin');
        // $this->load->model('m_admin');
    }

   public function searchstaff()
	{
		$search_array = array();
		if($this->input->post())
		{
			foreach ($this->input->post() as $key => $value) {
				if($value)
				{
					
					$data[$key] = $value;
				}
				else
				{
					$data = array();
				}
			}

			$query = $this->db->get_where('staff_details', $data);

			$result = $query->result_array();
			$search_array = $result;
		}

		return $search_array;
	}

	public function generate_search_table()
	{
		$staff_list = '';
		$data = $this->searchstaff();
		$staff_list .= '<thead><tr><th>#</th><th>Staff Number</th><th>First Name</th><th>Surname</th><th>Other Name</th><th>Staff Role</th><th>Details</td></tr></thead>';
		$staff_list .= '<tbody>';
		if($data)
		{
			$counter = 0;
			foreach ($data as $key => $value) {
				$counter++;
				$staff_list .= '<tr>';
				$staff_list .= '<td>' . $counter. '</td>';
				$staff_list .= '<td>' . $value['staff_no'] . '</td>';
				$staff_list .= '<td>' . $value['f_name'] . '</td>';
				$staff_list .= '<td>' . $value['s_name'] . '</td>';
				$staff_list .= '<td>' . $value['o_names'] . '</td>';
				$staff_list .= '<td>' . $value['ssg_name'] . '</td>';
				$staff_list .= '<td><a href = "'.base_url().'admin/search/staffmember/' . $value['id'] . '">View More</a></td>';
				$staff_list .= '</tr>';
			}
		}
		else
		{
			$staff_list .= '<tr><td colspan = "7"><center>No data found</center></td></tr>';
		}
		$staff_list .= '</tbody>';

		return $staff_list;
	}

	public function searchresult()
	{
		$data['pagetitle'] = 'Staff Page : Search Result';
		$data['pagedescription'] = 'Search Result';
		$data['search_result'] = $this->generate_search_table();
		$data['content_view'] = 'staff/searchresult';
		$this->load->view('template/londonium_template', $data);
	}

	public function staffmember($staff_id)
	{
		$staff_details = $this->m_admin->get_staff_searched($staff_id);
		if ($staff_details) {
			# code...
		}
	}
	
	public function json_search()
	{
		$data_array = array();
		$data = $this->searchstaff();	

		foreach ($data as $key => $value) {
			foreach ($value as $k => $v) {
				$data_value[] = $v;
			}
			$data_array['aaData'][] = $data_value;
		}

		echo json_encode($data_array);
	}
}