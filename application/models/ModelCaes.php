<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCaes extends CI_Model
{
	public function insertCaes($cao)
	{
		$this->db->insert('cao', $cao);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}
	
	
	
	
	
}
?>