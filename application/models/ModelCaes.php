<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCaes extends CI_Model
{
	public function insertCao($cao)
	{
		$this->db->insert('cao', $cao);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}


	public function selectCaes()
	{
		$this -> db -> select('id, nome, porte');
		$this -> db -> from('cao');
		$query = $this -> db -> get();
		return $query->result_array();
	}
	
	
	
	
	
}
?>