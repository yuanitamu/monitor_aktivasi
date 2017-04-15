<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cregister extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mregister');
		$this->load->library('session');		
		
	}
	public function index(){
		$this->load->view('vsidebar');
		$this->load->view('vblank');


	}
	public function register(){
		$this->load->view('vsidebar');
		$this->load->view('vregister');
	}	
	public function proses_register(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$divisi = $this->input->post('divisi');
		
		$this->load->model('mregister');
		$this->mregister->tambah($email, $password, $nama, $jabatan, $divisi);
		echo '<script language="javascript">';
		echo 'alert("Registrasi Berhasil!")';
		echo '</script>';
		$this->index();
	}
}
?>
