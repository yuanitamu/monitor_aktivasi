<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cgraph extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->library('session');
		

    }
    public function tampil()
	{	
		$this->load->view('vsidebar');
		$this->load->view('multi');
		
		;
	}
}
?>