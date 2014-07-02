<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
        
        /* function that will display the form */
	public function index()
	{
		//$this->load->view('welcome_message');
            
                $this->load->helper(array('url','form'));
                //$this->load->library(array('form_validation','email'));
                $this->load->library('form_validation');
                $this->load->library('email',array('protocol'=>'smtp','smtp_host' => 'ssl://smtp.googlemail.com',
                                     'smtp_port' => 465,
                                     'smtp_user' => 'guelme88@gmail.com',
                                     'smtp_pass' => 'Miguel1988'));
                $this->email->set_newline("\r\n");
                
                /* set the rule */
                $this->form_validation->set_rules('first','First name','required|xss_clean');  //valid first name
                $this->form_validation->set_rules('last','Last name','required|xss_clean');   //valid last name
                $this->form_validation->set_rules('email','Email','valid_email|xss_clean');       //valid email
                $this->form_validation->set_rules('message','Message','required|xss_clean');    //valid message to send
                $this->form_validation->set_rules('subject','Subject','required|xss_clean');    //valid message to send
                $data = array('title'=>'Contact Me');
                $this->load->view('header',$data);
                if($this->form_validation->run() === FALSE)
                {
                   $this->load->view('contact_view'); //load the form
                }
                else
                {
                    //user completed form
                    //create email message send to guelme88@gmail.com and load success view
                    $first = $this->input->post('first');
                    $last = $this->input->post('last');
                    $name = $first.", ".$last;
                    $email = $this->input->post('email');
                    $subject = $this->input->post('subject');
                    $message = $this->input->post('message');
                    
                    //make sure the email helper class is loaded in
                    $this->email->from($email,$name);
                    $this->email->to('guelme88@gmail.com');
                    $this->email->subject($subject);
                    $this->email->message($message);
                    if($this->email->send())
                    {
                           $data = array('title'=>'Your email has been sent','name'=>$name,'subject'=>$subject);
                           $this->load->view('success',$data); //success view that displays a message stating the email has been sent to the admin
                    }
                    else
                    {
                        show_error($this->email->print_debugger());
                    }
                }
                $this->load->view('footer');
            
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */