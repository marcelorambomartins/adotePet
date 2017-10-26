<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCadastrarPessoas extends CI_Model
{
	public function insertPessoa()
	{
		$query = $this->db->insert('pessoa', $data);
		return $query->result();
		*/
		
	}
	
	
	
	
	
}
?>