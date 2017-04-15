<?php
class models extends CI_Model{
	function ambil(){
		$query = $this->db->query("select *from user");
		return $query->result();
	}
	
	function save(){
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		$mlebu=$this->db->query("INSERT INTO user VALUES('$id','$username','$password','$level')");
		return $mlebu;
	}
	
	function edit(){
		$id=$this->input->post('id');
		$query=$this->db->query("SELECT * FROM user WHERE id='$id'");
		return $query->result();
	}
	
	function proses(){
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		$masuk=$this->db->query("UPDATE user SET username='$username', password='$password', level='$level' WHERE id='$id'");
	}
	
	function delete(){
		$id=$this->input->post('id');
		$query=$this->db->query("DELETE FROM user WHERE id='$id'");
	}
}
?>