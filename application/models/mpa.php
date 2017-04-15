<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mpa extends CI_Model {
	private $idPa, $tglPa, $hariPa, $persenPa, $ThariPa, $TpersenPa;	
	
	public function __construct(){
			$this->idPa = 0;
	}
	public function tampil(){
    	$query = $this->db->query("SELECT * FROM pa ORDER BY tglPa DESC");
    	$array = array();
    	$i = 0;
    	foreach ($query->result() as $dt) {   		
    		$itm = new cpa();
    		$itm->idPa         = $dt->idPa;
    		$itm->tglPa        = $dt->tglPa;
    		$itm->hariPa       = $dt->hariPa." hari ";
    		$itm->persenPa      = $dt->persenPa." persen ";
    		$itm->ThariPa       = $dt->ThariPa." hari ";
    		$itm->TpersenPa      = $dt->TpersenPa." persen ";			
    		
    		$array[$i] = $itm;
    		$i++;
    	}
    	return $array;
	}
	public function tampil1(){
    	$query = $this->db->query("SELECT * FROM pa ORDER BY tglPa DESC LIMIT 1");
    	$array = array();
    	$i = 0;
    	foreach ($query->result() as $dt) {   		
    		$itm = new cpa();
    		$itm->idPa         = $dt->idPa;
    		$itm->tglPa        = $dt->tglPa;
    		$itm->hariPa       = $dt->hariPa." hari ";
    		$itm->persenPa      = $dt->persenPa." persen ";
    		$itm->ThariPa       = $dt->ThariPa." hari ";
    		$itm->TpersenPa      = $dt->TpersenPa." persen ";			
    		
    		$array[$i] = $itm;
    		$i++;
    	}
    	return $array;
	}	
	
	public function get($pesan,$value){
		$bln = $value;		
	   	$query = $this->db->query("SELECT * FROM pa where MONTH(tglPa) = '$bln' ORDER BY tglPa DESC");
	   	$array = array();
	   	$i = 0;
	   	foreach ($query->result() as $dt) {   		
    		$itm = new cpa();
	   		$itm->idPa         = $dt->idPa;
	   		$itm->tglPa       = $dt->tglPa;
	   		$itm->hariPa       = $dt->hariPa." hari ";
	   		$itm->persenPa      = $dt->persenPa." persen ";
    		$itm->ThariPa       = $dt->ThariPa." hari ";
    		$itm->TpersenPa      = $dt->TpersenPa." persen ";			
    	
    		$array[$i] = $itm;
	   		$i++;
    	}
    	return $array;
	}
	
	public function tambah($tglPa, $hariPa, $persenPa, $ThariPa, $TpersenPa) {
		$query = $this->db->query("INSERT INTO pa (tglPa, hariPa, persenPa, ThariPa, TpersenPa) values ('$tglPa', '$hariPa', '$persenPa', '$ThariPa', '$TpersenPa')");
		$query1 = $this->db->query("INSERT INTO datapa (idKet, tanggal, nilai) values ('1', '$tglPa', '$hariPa')");
		$query2 = $this->db->query("INSERT INTO datapa (idKet, tanggal, nilai) values ('2', '$tglPa', '$ThariPa')");
		$query3 = $this->db->query("INSERT INTO datapa (idKet, tanggal, nilai) values ('3', '$tglPa', '$persenPa')");
		$query4 = $this->db->query("INSERT INTO datapa (idKet, tanggal, nilai) values ('4', '$tglPa', '$TpersenPa')");
	}
	public function get_data($data){
			$this->db->where($data);
			$q=$this->db->get('pa');
			
			$data=$q->first_row();
			return $data;	
	}
	public function edit($tglPa, $hariPa, $persenPa, $ThariPa, $TpersenPa){
			$tglPa = $this->input->post('tglPa');
			$qshow=$this->db->query("UPDATE pa SET tglPa='$tglPa', hariPa='$hariPa', persenPa='$persenPa', ThariPa='$ThariPa', TpersenPa='$TpersenPa' WHERE tglPa='$tglPa'");
			$qshow1=$this->db->query("UPDATE datapa SET tanggal='$tglPa', nilai='$hariPa' WHERE tanggal='$tglPa' and idKet='1'");
			$qshow1=$this->db->query("UPDATE datapa SET tanggal='$tglPa', nilai='$ThariPa' WHERE tanggal='$tglPa' and idKet='2'");
			$qshow2=$this->db->query("UPDATE datapa SET tanggal='$tglPa', nilai='$persenPa' WHERE tanggal='$tglPa' and idKet='3'");
			$qshow2=$this->db->query("UPDATE datapa SET tanggal='$tglPa', nilai='$TpersenPa' WHERE tanggal='$tglPa' and idKet='4'");

	}
	function delete(){
		$tglPa = $this->input->post('tglPa');
		$query = $this->db->query("DELETE FROM pa WHERE tglPa='$tglPa' ");
		$query1 = $this->db->query("DELETE FROM datapa WHERE tanggal='$tglPa' ");

	}

}
?>