<?php if (! defined("BASEPATH")) exit('No direct script access allowed');

class Staff extends MY_Controller
{
	var $applicant_row, $counts;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->module('admin');
        // $this->load->model('m_admin');
    }

    function index()
    {
    	$data['pagetitle'] = 'Staff Page';
		$data['pagedescription'] = 'Contains details about staff members';
		$data['groups'] = $this->group_combo;
		$data['content_view'] = 'staff/staff';
		$this->load->view('template/londonium_template', $data);
    }
    function all()
    {
    	echo "all staff members";
    }

    function addmember()
    {
    	$data['pagetitle'] = 'Staff Page';
		$data['pagedescription'] = 'New Staff Member';
		$data['groups'] = $this->sub_group_combo;
		$data['content_view'] = 'staff/addmember';
		$this->load->view('template/londonium_template', $data);
    }

    function stafflist()
    {

    }

    function staffgroups()
    {

    }

    function registermember()
    {
        
        $ppic = 'profile_picture';
        $path = $this->uploader($ppic);
        if(!is_array($path))
        {
            $insertion = $this->m_admin->staffregistration($path);
            if($insertion)
            {
                $subject = 'WELCOME TO SCITM';
                $recepient = $insertion['email'];
                $id = sha1($recepient);
                $email_message = '';
                $email_message .= '<html>';
                $email_message .= '<head>';
                $email_message .= '<link href = "'.base_url().'assets/bootstrap/css/bootstrap.css">';
                $email_message .= '</head>';
                $email_message .= '<body style = "width: 70%; margin: 0 auto;">';
                $email_message .= '<h1><center>SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE</center></h1>';
                $email_message .= '<p>Hi, '.$insertion['firstname'].'.</p><hr>';
                $email_message .= '<p>Welcome aboard. We at Southern cross Institute of Tropical Medicine would like to congratulate you for joining this marvelous community. <a href = '.base_url().'home/services>Click here for more details</a></p>';
                $email_message .= '<div style = "border: 1px solid black;">';
                $email_message .= '<p>Username: '.$insertion['username'].'</p>';
                $email_message .= '<p>Password: Default: 123456. PLEASE MAKE SURE YOU CHANGE THIS</p>';        
                $email_message .= '<p>Staff No: '.$insertion['staff_no'].'</p>';
                $email_message .= '</div>';
                $email_message .= '</body>';
                $email_message .= '</html>';
                $this->email($id, $recepient, $subject, $email_message);
            }
        }
        else
        {
            print_r($error);die;
        }
    }
}