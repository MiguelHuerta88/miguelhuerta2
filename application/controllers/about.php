<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
         function index()
	{
		//$this->load->view('welcome_message');
                $this->load->helper('url');
                $data = array('title'=>'About');
                $this->load->view('header',$data);
                $this->load->view('about_view');
                $this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */