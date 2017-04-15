<?php
class mregister extends CI_Model {

	public function tambah($email, $password, $nama, $jabatan, $divisi) {
	$md5=md5($password);
		$query = $this->db->query("INSERT INTO user (email, password, nama, jabatan, divisi) values ('$email', '$md5', '$nama', '$jabatan', '$divisi')");
	}
}
?>