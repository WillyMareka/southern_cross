<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
    public $tables, $get_userdetails, $group_combo;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('admin/m_admin');
        $this->load->module('auth');
        $this->tables = $this->m_admin->getalltables();
        $this->group_combo = $this->creategroupcombo();

    }

   public function showbase()
   {
    echo base_url();
   }
    public function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url().'home');
    }

   public function email($id, $recepient, $subject, $message)  
    {
        $time=date('Y-m-d');
        
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => "chrisrichrads@gmail.com",
            'smtp_pass' => "joshuaSUN"
            );
        
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('chrisrichrads@gmail.com', 'SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE');
        $this->email->to($recepient);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype("html");
        // if(!is_null($attached_file)){
        //  $this->email->attach($attached_file);
        // }
        $this->m_admin->send_mail($id, $recepient, $subject, $message);
        if($this->email->send())
            {   

               $this->m_admin->send_mail();
            } else 
            {
                show_error($this->email->print_debugger());
            }
        
    }


    public function email_attachment($id, $recepient, $subject, $message, $attached_file=null)
    {
        $time=date('Y-m-d');
       
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => "chrisrichrads@gmail.com",
            'smtp_pass' => "joshuaSUN"
            );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('chrisrichrads@gmail.com', 'SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE');
        $this->email->to($recepient);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype("html");
        if(!is_null($attached_file)){
            $this->email->attach($attached_file);
        }
        
        if($this->email->send())
            {   

              
            } else 
            {
                show_error($this->email->print_debugger());
            }
    }

    function userdetails($userid, $usertype)
    {
        $users = array('ADMIN' => 'administrator', 'Staff' => 'staff', 'Student' => 'student_course');

        foreach ($users as $key => $value) {
            if($key == $usertype)
            {
                $details = $this->db->get_where($value, array('user_id' => $userid), 1);
                $user_details = $details -> result_array();
            }
        }

        return $user_details;
    }

    function checkLogin($current)
    {
        if(!$this->session->userdata('logged_in'))
        {
            redirect(base_url() . 'auth');
        }

        else
        {
            $usertype = $this->session->userdata('usertype');

            if($usertype != $current)
            {
                redirect(base_url() . 'auth');
            }
        }
    }

    function fetchuserdetails()
    {
        $userid = $this->session->userdata('userid');
        $usertype = $this->session->userdata('usertype');
        $this->get_userdetails = $this->userdetails($userid, $usertype);

        return $this->get_userdetails;
    }

    public function creategroupcombo()
    {
        $groups = $this->m_admin->get_staffgroups();

        if($groups)
        {
            foreach ($groups as $key => $value) {
                $this->group_combo .= '<option value = "'. $value['sg_id'] . '">'.$value['group_name'].'</option>';
            }
        }
        else
        {
            $this->group_combo = '<optgroup>No Group</optgroup>';
        }

        return $this->group_combo;
    }

    public function get_staffsubgroups($group_id)
    {
        $sub_groups = $this->m_admin->get_staffsubgroups($group_id);

        if($sub_groups)
        {
            echo json_encode($sub_groups);
        }
        else
        {
            echo "No group found";
        }
    }

}