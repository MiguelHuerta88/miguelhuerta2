<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {
	public function index()
	{
                $this->load->helper('url');
                $data = array('title'=>'Projects');
                $this->load->view('header',$data);
                $this->load->view('edit_view');
                $this->load->view('footer');
	}
}

/* End of file welcome.php */