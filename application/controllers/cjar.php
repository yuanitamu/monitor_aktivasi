<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cjar extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('mjar');
		$this->load->library('session');
    }
	
	public function tampil(){	
		$trigger = $_GET['view'];
		$this->load->view('vsidebar');		
		if($trigger == "all"){
			$this -> mjar -> tampil ();
			$this->load->view('vjar');
		}
		else if($trigger == "bln"){
			$data['group'] = $_GET['month'];
			$format = $_GET['month'];
			$explodeFormat = explode("-",$format);
			$pesan = "month";
			$hasilQuery = $this->read($pesan,$explodeFormat[1]);
			$data['hasil'] = $hasilQuery;
			$data['view'] = $trigger;
			$this->load->view('vjarbln',$data);
		}
		else if($trigger == "tambah"){
			$this->p_tambah();
			$this->load->view('vjar');
		}
	}
	
	public function read($trigger,$value){
		$mjar = new mjar();
		$data = $mjar->get($trigger,$value);
		return $data;
	}
	
	public function tambah(){
		$this->load->view('vsidebar');
		$this->load->view('vtambahjar');
	}	
	public function p_tambah() {
		$tglJar = $this->input->post('tglJar');
		$TmenitJar = $this->input->post('TmenitJar');
		$menitJar = $this->input->post('menitJar');
		$TpersenJar = $this->input->post('TpersenJar');
		$persenJar = $this->input->post('persenJar');			
		$this->load->model('mjar');
		$this->mjar->tambah($tglJar, $TmenitJar, $menitJar, $TpersenJar, $persenJar);
		echo '<script language="javascript">';
		echo 'alert("Data Pemeliharaan Jaringan Berhasil Ditambah")';
		echo '</script>';
     }
	 public function edit()
	{
		$this->input->post('tglJar');
		$param=array('tglJar'=>$_POST['tglJar']);
		$this->load->model('mjar');
		$data['jaringan']=$this->mjar->get_data($param);
		$this->load->view('vsidebar');
		$this->load->view('veditjar',$data);
	}
	function p_edit()
	{
		$tglJar = $this->input->post('tglJar');
		$TmenitJar = $this->input->post('TmenitJar');
		$menitJar = $this->input->post('menitJar');
		$TpersenJar = $this->input->post('TpersenJar');		
		$persenJar = $this->input->post('persenJar');
		$this->load->model('mjar');
		$this->mjar->edit($tglJar, $menitJar,  $TmenitJar, $TpersenJar, $persenJar);
		echo '<script language="javascript">';
		echo 'alert("Data Pemeliharaan Jaringan Berhasil Diedit")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vjar');			
	}
	function delete(){
		$this->load->model('mjar');	
		$data['query']=$this->mjar->delete();
		echo '<script language="javascript">';
		echo 'alert("Data Pemeliharaan Jaringan Berhasil Dihapus")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vjar');			
	}
}
?>