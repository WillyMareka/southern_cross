<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('admin/m_admin');
    }

   function send_email()  
    {
        
        $id = $this->session->userdata("id");
        $recepient = $this->input->post("recepients");
        $subject   = $this->input->post("subject");
        $message   = $this->input->post("message");

        $this->email($id, $recepient, $subject, $message);
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
        
        if($this->email->send())
            {   

               
            } else 
            {
                show_error($this->email->print_debugger());
            }
        
    }


    public function email_attachment($id, $recepient, $subject, $message, $attached_file =null)
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

}