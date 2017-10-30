<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCadastrarPessoas extends CI_Model
{
	public function insertPessoa($pessoa)
	{
		$this->db->insert('pessoa', $pessoa);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}
	
	
	
	
	
}
?>