<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class cadum extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('madum');
		$this->load->library('session');
    }
	
	public function tampil(){	
		$trigger = $_GET['view'];
		$this->load->view('vsidebar');		
		if($trigger == "all"){
			$this -> madum -> tampil ();
			$this->load->view('vadum');
		}
		else if($trigger == "bln"){
			$data['group'] = $_GET['month'];
			$format = $_GET['month'];
			$explodeFormat = explode("-",$format);
			$pesan = "month";
			$hasilQuery = $this->read($pesan,$explodeFormat[1]);
			$data['hasil'] = $hasilQuery;
			$data['view'] = $trigger;
			$this->load->view('vadumbln',$data);
		}
		else if($trigger == "tambah"){
			$this->p_tambah();
			$this->load->view('vadum');
		}
	}
	
	public function read($trigger,$value){
		$madum= new madum();
		$data = $madum->get($trigger,$value);
		return $data;
	}
	
	public function tambah(){
		$this->load->view('vsidebar');
		$this->load->view('vtambahadum');
	}	
	public function p_tambah() {
		$tglAdum = $this->input->post('tglAdum');
		$kali1Adum = $this->input->post('kali1Adum');
		$kali2Adum = $this->input->post('kali2Adum');
		$Tkali1Adum = $this->input->post('Tkali1Adum');
		$Tkali2Adum = $this->input->post('Tkali2Adum');		
		$this->load->model('madum');
		$this->madum->tambah($tglAdum, $kali1Adum, $kali2Adum, $Tkali1Adum, $Tkali2Adum);
		echo '<script language="javascript">';
		echo 'alert("Data Administrasi & Umum Berhasil Ditambah")';
		echo '</script>';
     }
	 public function edit()
	{
		$this->input->post('tglAdum');
		$param=array('tglAdum'=>$_POST['tglAdum']);
		$this->load->model('madum');
		$data['adum']=$this->madum->get_data($param);
		$this->load->view('vsidebar');
		$this->load->view('veditadum',$data);
	}
	function p_edit()
	{
		$tglAdum = $this->input->post('tglAdum');
		$kali1Adum = $this->input->post('kali1Adum');
		$kali2Adum = $this->input->post('kali2Adum');
		$Tkali1Adum = $this->input->post('Tkali1Adum');
		$Tkali2Adum = $this->input->post('Tkali2Adum');		
		$this->load->model('madum');
		$this->madum->edit($tglAdum, $kali1Adum, $kali2Adum, $Tkali1Adum, $Tkali2Adum);
		echo '<script language="javascript">';
		echo 'alert("Data Administrasi & Umum Berhasil Diedit")';
		echo '</script>';
		$this->load->view('vsidebar');
		$this->load->view('vadum');			
	}
	function delete(){
		$this->load->model('madum');	
		$data['query']=$this->madum->delete();
		echo '<script language="javascript">';
		echo 'alert("Data Administrasi & Umum Berhasil Dihapus")';
		echo '</script>';
		$this->tampil();
		$this->load->view('vsidebar');
		$this->load->view('vadum');				
	}
}
?>
