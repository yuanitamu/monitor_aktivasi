<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mda');
		$this->load->library('session');
    }
	
	public function tampil(){	
		$trigger = $_GET['view'];
		$this->load->view('vsidebar');		
		if($trigger == "all"){
			$this -> mda -> tampil ();
			$this->load->view('vda');
		}
		else if($trigger == "bln"){
			$data['group'] = $_GET['month'];
			$format = $_GET['month'];
			$explodeFormat = explode("-",$format);
			$pesan = "month";
			$hasilQuery = $this->read($pesan,$explodeFormat[1]);
			$data['hasil'] = $hasilQuery;
			$data['view'] = $trigger;
			$this->load->view('vdabln',$data);
		}
		else if($trigger == "tambah"){
			$this->p_tambah();
			$this->load->view('vda');
		}
	}
	
	public function read($trigger,$value){
		$mda = new mda();
		$data = $mda->get($trigger,$value);
		return $data;
	}

	public function tambah(){
		$this->load->view('vsidebar');
		$this->load->view('vtambahda');
	}	
	public function p_tambah() {
		$tglDa = $this->input->post('tglDa');
		$kaliDa = $this->input->post('kaliDa');
		$persenDa = $this->input->post('persenDa');
		$TkaliDa = $this->input->post('TkaliDa');
		$TpersenDa = $this->input->post('TpersenDa');		
		$this->load->model('mda');
		$this->mda->tambah($tglDa, $kaliDa, $persenDa, $TkaliDa, $TpersenDa);
		echo '<script language="javascript">';
		echo 'alert("Data Data Aset Berhasil Ditambah")';
		echo '</script>';
     }
	 public function edit()
	{
		$this->input->post('tglDa');
		$param=array('tglDa'=>$_POST['tglDa']);
		$this->load->model('mda');
		$data['da']=$this->mda->get_data($param);
		$this->load->view('vsidebar');
		$this->load->view('veditDa',$data);
	}
	function p_edit()
	{
		$tglDa = $this->input->post('tglDa');
		$kaliDa = $this->input->post('kaliDa');
		$persenDa = $this->input->post('persenDa');
		$TkaliDa = $this->input->post('TkaliDa');
		$TpersenDa = $this->input->post('TpersenDa');		
		$this->load->model('mda');
		$this->mda->edit($tglDa, $kaliDa, $persenDa, $TkaliDa, $TpersenDa);
		echo '<script language="javascript">';
		echo 'alert("Data Data Aset Berhasil Diedit")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vda');			
	}
	function delete(){
		$this->load->model('mda');	
		$data['query']=$this->mda->delete();
		echo '<script language="javascript">';
		echo 'alert("Data Data Aset Berhasil Dihapus")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vda');			
	}
	
}
?>