<?php 
	class muser extends CI_Model{
		public function __construct(){
			parent::__construct();
    	}
		
		public function login(){
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$md5=md5($password);
			$query = $this->db->query("select * from user where email='$email' and password='$md5'");
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $rows) {
                //add all data to session
					$data = array(
						'idUser' => $rows->idUser,
						'email' => $rows->email,
						'password' => $rows->password,
						'nama'=>$rows->nama,
						'jabatan'=>$rows->jabatan,
						'divisi'=>$rows->divisi
						);
				}
				$this->load->library('session');
				$this->session->set_userdata($data);
				return true;
			}else
			return false;
		
		}
			}

?>