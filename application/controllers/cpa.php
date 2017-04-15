<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cpa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mpa');
		$this->load->library('session');
    }
	
	public function tampil(){	
		$trigger = $_GET['view'];
		$this->load->view('vsidebar');		
		if($trigger == "all"){
			$this -> mpa -> tampil ();
			$this->load->view('vpa');
		}
		else if($trigger == "bln"){
			$data['group'] = $_GET['month'];
			$format = $_GET['month'];
			$explodeFormat = explode("-",$format);
			$pesan = "month";
			$hasilQuery = $this->read($pesan,$explodeFormat[1]);
			$data['hasil'] = $hasilQuery;
			$data['view'] = $trigger;
			$this->load->view('vpabln',$data);
		}
		else if($trigger == "tambah"){
			$this->p_tambah();
			$this->load->view('vpa');
		}
	}
	
	public function read($trigger,$value){
		$mpa = new mpa();
		$data = $mpa->get($trigger,$value);
		return $data;
	}
	
	public function tambah(){
		$this->load->view('vsidebar');
		$this->load->view('vtambahpa');
	}	
	public function p_tambah() {
		$tglPa = $this->input->post('tglPa');
		$hariPa = $this->input->post('hariPa');
		$persenPa = $this->input->post('persenPa');
		$ThariPa = $this->input->post('ThariPa');
		$TpersenPa = $this->input->post('TpersenPa');
		$this->load->model('mpa');
		$this->mpa->tambah($tglPa, $hariPa, $persenPa, $ThariPa, $TpersenPa);
		echo '<script language="javascript">';
		echo 'alert("Data Presale Aktivasi Berhasil Ditambah")';
		echo '</script>';
     }
	 public function edit()
	{
		$this->input->post('idPa');
		$param=array('idPa'=>$_POST['idPa']);
		$this->load->model('mpa');
		$data['pa']=$this->mpa->get_data($param);
		$this->load->view('vsidebar');
		$this->load->view('veditpa',$data);
	}
	function p_edit()
	{
		$tglPa = $this->input->post('tglPa');
		$hariPa = $this->input->post('hariPa');
		$persenPa = $this->input->post('persenPa');
		$ThariPa = $this->input->post('ThariPa');
		$TpersenPa = $this->input->post('TpersenPa');		
		$this->load->model('mpa');
		$this->mpa->edit($tglPa, $hariPa, $persenPa, $ThariPa, $TpersenPa);
		echo '<script language="javascript">';
		echo 'alert("Data Presale Aktivasi Berhasil Diedit")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vpa');			
	}
	function delete(){
		$this->load->model('mpa');	
		$data['query']=$this->mpa->delete();
		echo '<script language="javascript">';
		echo 'alert("Data Presale Aktivasi Berhasil Dihapus")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vpa');			
	}
}
?>