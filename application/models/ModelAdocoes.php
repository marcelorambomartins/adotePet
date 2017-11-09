<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdocoes extends CI_Model
{

	public function insertAdocao($adocao)
	{
		$this->db->insert('adocao', $adocao);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}
	
}
?>