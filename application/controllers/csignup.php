<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cSignup extends CI_Controller {

public function __construct()
{
	parent::__construct();
	session_start();
	$this->load->model('DataPasien');
}

public function callRegistrasi()
{
	
	$this->load->view('vhome/#myModal1');
}

public function index()
{
	
	$this->callRegistrasi();
}

public function getData()
{
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$re_password = $this->input->post('confirm_password');
	if($password != $re_password){
		echo $password;
		echo $re_password;
		$this->callRegistrasi();
	}else{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$TTL = $this->input->post('ttl');
		$email = $this->input->post('email');
		$dataInput = array('username'=>$username,
							'password'=>md5($password),
							'nama'=> $nama,
							'alamat'=> $alamat,
							'jeniskelamin'=> $jeniskelamin,
							'tanggal_lahir'=> $TTL,
							'email'=> $email);
		$this->load->model('DataPasien');
		$DataPasien = new DataPasien();
		$cek = $this->ifNotRegistered($this->readAllUser(),$dataInput);
		if($cek==true){
			$this->load->model('DataPasien');
			$DataPasien = new DataPasien();
			$DataPasien->simpanBiodata($dataInput);
			if(isset($_SESSION['Admin'])){
			require('Biodata_Controller.php');
			$bio = new Biodata_Controller();
			$bio->call_kelola_user();
			}
			else{
			$this->load->view('login');
			}
		}else{
		echo $cek;
			$this->callRegistrasi();
		}
	}
}

public function readAllUser()
{
	$this->load->model('DataPasien');
	$DataPasien = new DataPasien();
	$hasil = $DataPasien->getAllUser();
	return $hasil;
}

public function ifNotRegistered($hasil,$dataInput)
{
	foreach($hasil as $cek){
		if(($cek->username!= $dataInput['username']) 
			&& ($cek->password != $dataInput['password']) 
			&& ($cek->no_ktp != $dataInput['email'])){
				return true;
		}
	}
	return false;
}

public function edit()
{
	
	$this->load->view('home');
}





}
?>