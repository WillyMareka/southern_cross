<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_home');
    }

	function index()
	{
		$this->load->view('home');
	}

  public function enter_comment(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email','Email Address','trim|required|min_length[6]|max_length[50]|valid_email|xss_clean');

        if($this->form_validation->run()==FALSE){
          echo "There was a problem with submitting your comment 1";
        }else{
           $this->load->model('m_home');
           
           $result = $this->m_home->insert_comment();
           $this->load->view('v_home');
        }
      }

  public function services(){
    $this->load->view('services');
  }

   public function contacts(){
    $this->load->view('contacts');
  }

  public function market(){
    $this->load->view('marketability');
  }

   public function programs(){
    $this->load->view('programs');
  }

   public function about(){
    $this->load->view('about');
  }

  public function preamble(){
    $this->load->view('preamble');
  }

  public function exceltest()
  {
    $data[0] = array();
    $filename = 'myname';
    $form = 'pdf';
    $this->export->generate($data, $filename, $form,$identifier='');
  }


}