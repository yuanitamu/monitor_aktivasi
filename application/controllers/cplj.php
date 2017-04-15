<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cplj extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mplj');
		$this->load->library('session');
    }
	
	public function tampil(){	
		$trigger = $_GET['view'];
		$this->load->view('vsidebar');		
		if($trigger == "all"){
			$this -> mplj -> tampil ();
			$this->load->view('vplj');
		}
		else if($trigger == "bln"){
			$data['group'] = $_GET['month'];
			$format = $_GET['month'];
			$explodeFormat = explode("-",$format);
			$pesan = "month";
			$hasilQuery = $this->read($pesan,$explodeFormat[1]);
			$data['hasil'] = $hasilQuery;
			$data['view'] = $trigger;
			$this->load->view('vpljbln',$data);
		}
		else if($trigger == "tambah"){
			$this->p_tambah();
			$this->load->view('vplj');
		}
	}
	
	public function read($trigger,$value){
		$mplj = new mplj();
		$data = $mplj->get($trigger,$value);
		return $data;
	}
	
	public function tambah(){
		$this->load->view('vsidebar');
		$this->load->view('vtambahplj');
	}	
	public function p_tambah() {
		$tglPlj = $this->input->post('tglPlj');
		$hariPlj = $this->input->post('hariPlj');
		$ThariPlj = $this->input->post('ThariPlj');
		$persenPlj = $this->input->post('persenPlj');
		$targetPlj = $this->input->post('targetPlj');
		
		$this->load->model('mplj');
		$this->mplj->tambah($tglPlj, $hariPlj, $ThariPlj, $persenPlj, $targetPlj);
		echo '<script language="javascript">';
		echo 'alert("Data Lastmile & Jaringan Berhasil Ditambah")';
		echo '</script>';
     }
	 public function edit()
	{
		$this->input->post('idPlj');
		$param=array('idPlj'=>$_POST['idPlj']);
		$this->load->model('mplj');
		$data['plj']=$this->mplj->get_data($param);
		$this->load->view('vsidebar');
		$this->load->view('veditplj',$data);
	}
	function p_edit()
	{
		$tglPlj = $this->input->post('tglPlj');
		$hariPlj = $this->input->post('hariPlj');
		$ThariPlj = $this->input->post('ThariPlj');
		$persenPlj = $this->input->post('persenPlj');
		$targetPlj = $this->input->post('targetPlj');
		$this->load->model('mplj');
		$this->mplj->edit($tglPlj, $hariPlj, $ThariPlj, $persenPlj, $targetPlj);
		echo '<script language="javascript">';
		echo 'alert("Data Lastmile & Jaringan Berhasil Diedit")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vplj');			
	}
	function delete(){
		$this->load->model('mplj');	
		$data['query']=$this->mplj->delete();
		echo '<script language="javascript">';
		echo 'alert("Data Lastmile & Jaringan Berhasil Dihapus")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vplj');	
	}
}
?>