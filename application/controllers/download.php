<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of download
 *
 * @author miguelhuerta
 */
class Download extends CI_Controller {
    //put your code here
    
    function index()
    {
        $this->load->helper('url');
        $data = array('title'=>'Downloads');
        $this->load->view('header',$data);
        $this->load->view('download_view');
        $this->load->view('footer');
    }
    
}

?>
