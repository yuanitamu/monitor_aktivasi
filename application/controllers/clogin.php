<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class clogin extends CI_Controller {

public function __construct() {
	parent::__construct();
	$this->load->model('');
	$this->load->helper('url');
	$this->load->database();
}

public function call_login() {
	$this->load->view('vslider');
}
public function home() {
	$this->load->view('vsidebar');
	$this->load->view('vhome2');
}

public function index() {
	$this->load->library('session');
	if ($this->session->userdata('idUser') != "") {
		$id=$this->session->userdata('idUser');
		$this->load->view('vsidebar',$data);
		$this->load->view('vhome2');
	}else{
		$this->call_login();
	}
	
}

public function getDataLogin() {
	$this->load->library('session');
	$this->load->model('muser');
	$hasil=$this->muser->login();
	$id=$this->session->userdata('idUser');
	if($hasil){
		
		$this->load->view('vsidebar');
		$this->load->view('vhome2');
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Email atau Password salah")';
		echo '</script>';
		$this->call_login();
	}
}
public function log_out(){
	$this->load->library('session');
	$data = array(
                'idUser' => '',
                'email' => '',
                'password' => '',
				'nama'=>'',
				'jabatan'=>'',
				'divisi'=>''
            );
	$this->session->unset_userdata($data);
    $this->session->sess_destroy();
    redirect(base_url());
}
public function slider(){
	$this->load->view('vslider');
	}

}
?>