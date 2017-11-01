<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPessoas extends CI_Model
{

	
	public function insertPessoa($pessoa)
	{
		$this->db->insert('pessoa', $pessoa);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}
	
	
	public function autenticaPessoa($pessoa){
		$this -> db -> select('id, email, senha, nome, userType');
		$this -> db -> from('pessoa');
		$this -> db -> where('email', $pessoa['email']);
		$this -> db -> where('senha', $pessoa['senha']);
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0){
		    return $query->row_array();
		}
		else{
		    return false;
		}	
	}	
	
	public function validaEmail($pessoa){
		$this -> db -> select('id');
		$this -> db -> from('pessoa');
		$this -> db -> where('email', $pessoa['email']);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query -> num_rows() > 0){
		    return FALSE;
		}else{
			return TRUE;
		}
	}	

	
	
}
?>