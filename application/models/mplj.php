<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mplj extends CI_Model {
	private $idPlj, $tglPlj, $hariPlj, $ThariPlj, $persenPlj, $targetPlj;

	public function __construct(){
			$this->idPlj = 0;
	}
	public function tampil(){
	   	$query = $this->db->query("SELECT * FROM plj ORDER BY tglPlj DESC");
	   	$array = array();
	   	$i = 0;
	   	foreach ($query->result() as $dt) {   		
    		$itm = new cplj();
	   		$itm->idPlj         = $dt->idPlj;
	   		$itm->tglPlj        = $dt->tglPlj;
	   		$itm->hariPlj       = $dt->hariPlj;
	   		$itm->ThariPlj       = $dt->ThariPlj;			
	   		$itm->persenPlj      = $dt->persenPlj;
	   		$itm->targetPlj      = $dt->targetPlj;			
    	
    		$array[$i] = $itm;
	   		$i++;
    	}
    	return $array;
	}
	public function tampil1(){
	   	$query = $this->db->query("SELECT * FROM plj ORDER BY tglPlj DESC LIMIT 1");
	   	$array = array();
	   	$i = 0;
	   	foreach ($query->result() as $dt) {   		
    		$itm = new cplj();
	   		$itm->idPlj         = $dt->idPlj;
	   		$itm->tglPlj        = $dt->tglPlj;
	   		$itm->hariPlj       = $dt->hariPlj;
	   		$itm->ThariPlj       = $dt->ThariPlj;			
	   		$itm->persenPlj      = $dt->persenPlj;
	   		$itm->targetPlj      = $dt->targetPlj;			
    	
    		$array[$i] = $itm;
	   		$i++;
    	}
    	return $array;
	}	
	function get($pesan,$value){
		$bln = $value;
	   	$query = $this->db->query("SELECT * FROM plj where MONTH(tglPlj) = '$bln' ORDER BY tglPlj DESC");
	   	$array = array();
	   	$i = 0;
	   	foreach ($query->result() as $dt) {   		
    		$itm = new cplj();
	   		$itm->idPlj         = $dt->idPlj;
	   		$itm->tglPlj        = $dt->tglPlj;
	   		$itm->hariPlj       = $dt->hariPlj;
	   		$itm->ThariPlj       = $dt->ThariPlj;			
	   		$itm->persenPlj      = $dt->persenPlj;
	   		$itm->targetPlj      = $dt->targetPlj;
    	
    		$array[$i] = $itm;
	   		$i++;
    	}
    	return $array;
	}
	
	public function tambah($tglPlj, $hariPlj, $ThariPlj, $persenPlj, $targetPlj) {
		$query = $this->db->query("INSERT INTO plj (tglPlj, hariPlj, ThariPlj, persenPlj, targetPlj) values ('$tglPlj', '$hariPlj', '$ThariPlj', '$persenPlj', '$targetPlj', )");
	}
	public function get_data($data){
			$this->db->where($data);
			$q=$this->db->get('plj');
			
			$data=$q->first_row();
			return $data;	
	}
	public function edit($tglPlj, $hariPlj, $ThariPlj, $persenPlj, $targetPlj){
			$idPlj = $this->input->post('idPlj');
			$qshow="UPDATE plj SET tglPlj='$tglPlj', hariPlj='$hariPlj', ThariPlj='$ThariPlj', persenPlj='$persenPlj', targetPlj='$targetPlj' WHERE idPlj='$idPlj'";
			$query = $this->db->query($qshow);
			
			return $query ;
	}
	function delete(){
		$idPlj = $this->input->post('idPlj');
		$query = $this->db->query("DELETE FROM plj WHERE idPlj='$idPlj' ");
		return $query;	
	}
}
?>