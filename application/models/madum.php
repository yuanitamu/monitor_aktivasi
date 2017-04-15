<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class madum extends CI_Model {
	private $idAdum, $tglAdum, $kali1Adum, $kali2Adum, $Tkali1Adum, $Tkali2Adum;	
	
	public function __construct(){
			$this->idAdum = 0;
	}
	public function tampil(){
		$query = $this->db->query("SELECT * FROM adum ORDER BY tglAdum DESC");
    	$array = array();
    	$i = 0;
    	foreach ($query->result() as $dt) {   		
    		$itm = new cadum();
    		$itm->idAdum         = $dt->idAdum;
    		$itm->tglAdum       = $dt->tglAdum;
    		$itm->kali1Adum       = $dt->kali1Adum." kali ";
    		$itm->kali2Adum      = $dt->kali2Adum." kali ";
    		$itm->Tkali1Adum       = $dt->Tkali1Adum." kali ";
    		$itm->Tkali2Adum      = $dt->Tkali2Adum." kali ";			
    		
    		$array[$i] = $itm;
    		$i++;
    	}
    	return $array;
	}
	public function get($pesan,$value){
		$bln = $value;		
	   	$query = $this->db->query("SELECT * FROM adum where MONTH(tglAdum) = '$bln' ORDER BY tglAdum DESC");
	   	$array = array();
	   	$i = 0;
	   	foreach ($query->result() as $dt) {   		
    		$itm = new cadum();
	   		$itm->idAdum         = $dt->idAdum;
	   		$itm->tglAdum       = $dt->tglAdum;
	   		$itm->kali1Adum       = $dt->kali1Adum." kali ";
	   		$itm->kali2Adum      = $dt->kali2Adum." kali ";
    		$itm->Tkali1Adum       = $dt->Tkali1Adum." kali ";
    		$itm->Tkali2Adum      = $dt->Tkali2Adum." kali ";			
    	
    		$array[$i] = $itm;
	   		$i++;
    	}
    	return $array;
	}

	public function tambah($tglAdum, $kali1Adum, $kali2Adum, $Tkali1Adum, $Tkali2Adum) {
		$query = $this->db->query("INSERT INTO adum (tglAdum, kali1Adum, kali2Adum, Tkali1Adum, Tkali2Adum) values ('$tglAdum', '$kali1Adum', '$kali2Adum', '$Tkali1Adum', '$Tkali2Adum')");
		$query1 = $this->db->query("INSERT INTO dataadum (idKet, tanggal, nilai) values ('1', '$tglAdum', '$kali1Adum')");
		$query2 = $this->db->query("INSERT INTO dataadum (idKet, tanggal, nilai) values ('2', '$tglAdum', '$Tkali1Adum')");
		$query3 = $this->db->query("INSERT INTO dataadum (idKet, tanggal, nilai) values ('3', '$tglAdum', '$kali2Adum')");
		$query4 = $this->db->query("INSERT INTO dataadum (idKet, tanggal, nilai) values ('4', '$tglAdum', '$Tkali2Adum')");
	}
	public function get_data($data){
			$this->db->where($data);
			$q=$this->db->get('adum');
			
			$data=$q->first_row();
			return $data;	
	}
	public function edit($tglAdum, $kali1Adum, $kali2Adum, $Tkali1Adum, $Tkali2Adum){
			$tglAdum = $this->input->post('tglAdum');
			$qshow= $this->db->query("UPDATE adum SET tglAdum='$tglAdum', kali1Adum='$kali1Adum', kali2Adum='$kali2Adum', Tkali1Adum='$Tkali1Adum', Tkali2Adum='$Tkali2Adum' WHERE idAdum='$idAdum'");
			$qshow1=$this->db->query("UPDATE dataadum SET tanggal='$tglAdum', nilai='$kali1Adum' WHERE tanggal='$tglAdum' and idKet='1'");
			$qshow1=$this->db->query("UPDATE dataadum SET tanggal='$tglAdum', nilai='$Tkali1Adum' WHERE tanggal='$tglAdum' and idKet='2'");
			$qshow2=$this->db->query("UPDATE dataadum SET tanggal='$tglAdum', nilai='$$kali2Adum' WHERE tanggal='$tglAdum' and idKet='3'");
			$qshow2=$this->db->query("UPDATE dataadum SET tanggal='$tglAdum', nilai='$T$kali2Adum' WHERE tanggal='$tglAdum' and idKet='4'");
	
	}
	function delete(){
		$tglAdum = $this->input->post('tglAdum');
		$query = $this->db->query("DELETE FROM adum WHERE tglAdum='$tglAdum' ");
		$query1 = $this->db->query("DELETE FROM dataadum WHERE tanggal='$tglAdum' ");

		}

}
?>