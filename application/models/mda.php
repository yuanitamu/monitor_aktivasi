<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mda extends CI_Model {
	private $idDa, $tglDa, $kaliDa, $persenDa, $TkaliDa, $TpersenDa;	
	
	public function __construct(){
			$this->idDa = 0;
	}			
	public function tampil(){
		$query = $this->db->query("SELECT * FROM da ORDER BY tglDa DESC");
    	$array = array();
    	$i = 0;
    	foreach ($query->result() as $dt) {   		
    		$itm = new cda();
    		$itm->idDa         = $dt->idDa;
    		$itm->tglDa       = $dt->tglDa;
    		$itm->kaliDa       = $dt->kaliDa." kali ";
    		$itm->persenDa      = $dt->persenDa." persen ";
    		$itm->TkaliDa       = $dt->TkaliDa." kali ";
    		$itm->TpersenDa      = $dt->TpersenDa." persen ";			
    		
    		$array[$i] = $itm;
    		$i++;
    	}
    	return $array;
	}
	public function get($pesan,$value){
		$bln = $value;		
	   	$query = $this->db->query("SELECT * FROM da where MONTH(tglDa) = '$bln' ORDER BY tglDa DESC");
	   	$array = array();
	   	$i = 0;
	   	foreach ($query->result() as $dt) {   		
    		$itm = new cda();
	   		$itm->idDa         = $dt->idDa;
	   		$itm->tglDa       = $dt->tglDa;
	   		$itm->kaliDa       = $dt->kaliDa." kali ";
	   		$itm->persenDa      = $dt->persenDa." persen ";
    		$itm->TkaliDa       = $dt->TkaliDa." kali ";
    		$itm->TpersenDa      = $dt->TpersenDa." persen ";				
    	
    		$array[$i] = $itm;
	   		$i++;
    	}
    	return $array;
	}
	
	public function tambah($tglDa, $kaliDa, $persenDa, $TkaliDa, $TpersenDa) {
		$query = $this->db->query("INSERT INTO da (tglDa, kaliDa, persenDa, TkaliDa, TpersenDa) values ('$tglDa', '$kaliDa', '$persenDa', '$TkaliDa', '$TpersenDa')");
		$query1 = $this->db->query("INSERT INTO datada (idKet, tanggal, nilai) values ('1', '$tglDa', '$kaliDa')");
		$query2 = $this->db->query("INSERT INTO datada (idKet, tanggal, nilai) values ('2', '$tglDa', '$TkaliDa')");
		$query3 = $this->db->query("INSERT INTO datada (idKet, tanggal, nilai) values ('3', '$tglDa', '$persenDa')");
		$query4 = $this->db->query("INSERT INTO datada (idKet, tanggal, nilai) values ('4', '$tglDa', '$TpersenDa')");
	}
	public function get_data($data){
			$this->db->where($data);
			$q=$this->db->get('da');
			
			$data=$q->first_row();
			return $data;	
	}
	public function edit($tglDa, $kaliDa, $persenDa, $TkaliDa, $TpersenDa){
			$tglPa = $this->input->post('tglPa');
			$qshow=$this->db->query("UPDATE da SET tglDa='$tglDa', kaliDa='$kaliDa', persenDa='$persenDa', TkaliDa='$TkaliDa', TpersenDa='$TpersenDa' WHERE idDa='$idDa'");
			$qshow1=$this->db->query("UPDATE datada SET tanggal='$tglDa', nilai='$kaliDa' WHERE tanggal='$tglDa' and idKet='1'");
			$qshow1=$this->db->query("UPDATE datada SET tanggal='$tglDa', nilai='$TkaliDa' WHERE tanggal='$tglDa' and idKet='2'");
			$qshow2=$this->db->query("UPDATE datada SET tanggal='$tglDa', nilai='$persenDa' WHERE tanggal='$tglDa' and idKet='3'");
			$qshow2=$this->db->query("UPDATE datada SET tanggal='$tglDa', nilai='$TpersenDa' WHERE tanggal='$tglDa' and idKet='4'");
			
			
			return $query ;
	}
	function delete(){
		$tglDa = $this->input->post('tglDa');
		$query = $this->db->query("DELETE FROM da WHERE tglDa='$tglDa' ");
		$query1 = $this->db->query("DELETE FROM datada WHERE tanggal='$tglDa' ");
	}

}
?>