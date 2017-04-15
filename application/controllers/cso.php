<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mso');
		$this->load->library('session');

    }
    public function tampil()
	{	
		$this -> load-> model ('mso');
		$this -> mso -> tampil ();
		$this->load->view('vsidebar');
		$this->load->view('vso');
	}
	public function tambah(){
		$this->load->view('vsidebar');
		$this->load->view('vtambahso');
	}	
	public function p_tambah() {
		$tanggal = $this->input->post('tanggal');
		$topen = $this->input->post('topen');
		$tclose = $this->input->post('tclose');
		$tcancel = $this->input->post('tcancel');
		$total = $topen+$tclose+$tcancel;
		
		$this->load->model('mso');
		$this->mso->tambah($tanggal, $topen, $tclose, $tcancel, $total);
		echo '<script language="javascript">';
		echo 'alert("Data SO Berhasil Ditambah")';
		echo '</script>';
		$this->tampil();
     }
	 public function edit()
	{
		$this->input->post('tanggal');
		$param=array('tanggal'=>$_POST['tanggal']);
		$this->load->model('mso');
		$data['so']=$this->mso->get_data($param);
		$this->load->view('vsidebar');
		$this->load->view('veditso',$data);
	}
	function p_edit()
	{
		$tanggal = $this->input->post('tanggal');
		$topen = $this->input->post('topen');
		$tclose = $this->input->post('tclose');
		$tcancel = $this->input->post('tcancel');
		$total = $topen+$tclose+$tcancel;
		$this->load->model('mso');
		$this->mso->edit($tanggal, $topen, $tclose, $tcancel, $total);
		echo '<script language="javascript">';
		echo 'alert("Data SO Berhasil Diedit")';
		echo '</script>';
		$this->tampil();				
	}
	function delete(){
		$this->load->model('mso');	
		$data['query']=$this->mso->delete();
		echo '<script language="javascript">';
		echo 'alert("Data SO Berhasil Dihapus")';
		echo '</script>';
		$this->tampil();
	}
	
}
?>