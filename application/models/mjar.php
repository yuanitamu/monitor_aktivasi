<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mjar extends CI_Model {
	private $idJar, $tglJar, $menitJar, $persenJar;
	
	public function __construct(){
			$this->idJar = 0;
	}
	public function tampil(){		
    	$query = $this->db->query("SELECT * FROM jaringan ORDER BY idJar DESC");
    	$array = array();
    	$i = 0;
    	foreach ($query->result() as $dt) {   		
    		$itm = new cjar();
    		$itm->idJar         = $dt->idJar;
    		$itm->tglJar        = $dt->tglJar;
			$itm->TmenitJar       = $dt->TmenitJar." menit ";
    		$itm->menitJar       = $dt->menitJar." menit ";
			$itm->TpersenJar      = $dt->TpersenJar." persen ";
    		$itm->persenJar      = $dt->persenJar." persen ";
    		
    		$array[$i] = $itm;
    		$i++;
    	}
    	return $array;
	}	
	public function get($pesan,$value){
		$bln = $value;		
	   	$query = $this->db->query("SELECT * FROM jaringan where MONTH(tglJar) = '$bln' ORDER BY tglJar DESC");
	   	$array = array();
	   	$i = 0;
	   	foreach ($query->result() as $dt) {   		
    		$itm = new cjar();
	   		$itm->idJar         = $dt->idJar;
	   		$itm->tglJar        = $dt->tglJar;
			$itm->TmenitJar       = $dt->twaktu." menit ";
	   		$itm->menitJar       = $dt->menitJar." menit ";
			$itm->TpersenJar      = $dt->TpersenJar." persen ";
	   		$itm->persenJar      = $dt->persenJar." persen ";
    	
    		$array[$i] = $itm;
	   		$i++;
    	}
    	return $array;
	}
	
	public function tambah($tglJar, $TmenitJar, $menitJar, $TpersenJar, $persenJar) {
		$query = $this->db->query("INSERT INTO jaringan (tglJar, TmenitJar, menitJar, TpersenJar, persenJar) values ('$tglJar', '$TmenitJar', '$menitJar', '$TpersenJar', '$persenJar')");
		$query1 = $this->db->query("INSERT INTO datapj (idKet, tanggal, nilai) values ('1', '$tglJar', '$TmenitJar')");
		$query2 = $this->db->query("INSERT INTO datapj (idKet, tanggal, nilai) values ('2', '$tglJar', '$menitJar')");
		$query3 = $this->db->query("INSERT INTO datapj (idKet, tanggal, nilai) values ('3', '$tglJar', '$TpersenJar')");
		$query4 = $this->db->query("INSERT INTO datapj (idKet, tanggal, nilai) values ('4', '$tglJar', '$persenJar')");
	}
	public function get_data($data){
			$this->db->where($data);
			$q=$this->db->get('jaringan');
			
			$data=$q->first_row();
			return $data;	
	}
	public function edit($tglJar, $menitJar,  $TmenitJar, $TpersenJar, $persenJar) {
			$tglJar = $this->input->post('tglJar');
			$qshow=$this->db->query("UPDATE jaringan SET tglJar='$tglJar', TmenitJar='$TmenitJar', menitJar='$menitJar', TpersenJar='$TpersenJar', persenJar='$persenJar' WHERE tglJar='$tglJar'");
			$qshow1=$this->db->query("UPDATE datapj SET tanggal='$tglJar', nilai='$TmenitJar' WHERE tanggal='$tglJar' and idKet='1'");
			$qshow2=$this->db->query("UPDATE datapj SET tanggal='$tglJar', nilai='$menitJar' WHERE tanggal='$tglJar' and idKet='2'");
			$qshow3=$this->db->query("UPDATE datapj SET tanggal='$tglJar', nilai='$TpersenJar' WHERE tanggal='$tglJar' and idKet='3'");
			$qshow4=$this->db->query("UPDATE datapj SET tanggal='$tglJar', nilai='$persenJar' WHERE tanggal='$tglJar' and idKet='4'");
	}
	function delete(){
		$tglJar = $this->input->post('tglJar');
		$query = $this->db->query("DELETE FROM jaringan WHERE tglJar='$tglJar' ");
		$query1 = $this->db->query("DELETE FROM datapj WHERE tanggal='$tglJar' ");
			
		}

}
?>