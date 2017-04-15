<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 */
class mso extends CI_Model {
	
	public function tampil(){
    	$query = $this->db->query("SELECT * FROM so ORDER BY id DESC");
    	$array = array();
    	$i = 0;
    	foreach ($query->result() as $data) {   		
    		$itm = new cso();
			$itm -> id = $data->id;
    		$itm->topen         = $data->topen;
			$itm->tanggal         = $data->tanggal;
    		$itm->tclose        = $data->tclose;
    		$itm->tcancel			= $data->tcancel;
			$itm->total         = $data->total;
			
    		$array[$i] = $itm;
    		$i++;
    	}
    	return $array;
	}
	
	public function tambah($tanggal, $topen, $tclose, $tcancel, $total) {
		
		$query = $this->db->query("INSERT INTO so (tanggal, topen, tclose, tcancel, total) values ('$tanggal', '$topen', '$tclose', '$tcancel', '$total')");
		$query1 = $this->db->query("INSERT INTO statuso (idSO, tanggal, nilai) values ('1', '$tanggal', '$topen')");
		$query2 = $this->db->query("INSERT INTO statuso (idSO, tanggal, nilai) values ('2', '$tanggal', '$tclose')");
		$query3 = $this->db->query("INSERT INTO statuso (idSO, tanggal, nilai) values ('3', '$tanggal', '$tcancel')");
		$query4 = $this->db->query("INSERT INTO statuso (idSO, tanggal, nilai) values ('4', '$tanggal', '$total')");

	}
	public function get_data($data){
			$this->db->where($data);
			$q=$this->db->get('so');
			$data=$q->first_row();
			return $data;	
	}
	public function edit($tanggal, $topen, $tclose, $tcancel, $total){
			$tanggal1 = $this->input->post('tanggal');
			$qshow=$this->db->query("UPDATE so SET tanggal='$tanggal', topen='$topen', tclose='$tclose', tcancel='$tcancel', total='$total' WHERE tanggal='$tanggal1'");
			$qshow1=$this->db->query("UPDATE statuso SET tanggal='$tanggal', nilai='$topen' WHERE tanggal='$tanggal1' and idSO='1'");
			$qshow2=$this->db->query("UPDATE statuso SET tanggal='$tanggal', nilai='$tclose' WHERE tanggal='$tanggal1' and idSO='2'");
			$qshow3=$this->db->query("UPDATE statuso SET tanggal='$tanggal', nilai='$tcancel' WHERE tanggal='$tanggal1' and idSO='3'");
			$qshow4=$this->db->query("UPDATE statuso SET tanggal='$tanggal', nilai='$total' WHERE tanggal='$tanggal1' and idSO='4'");
			
	}
	function delete(){
		$tanggal = $this->input->post('tanggal');
		$query = $this->db->query("DELETE FROM so WHERE tanggal='$tanggal' ");
		$query1 = $this->db->query("DELETE FROM statuso WHERE tanggal='$tanggal' ");
		}
}
?>