<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogarPessoas extends CI_Model
{
	public function validaEmail($pessoa){
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
}
?>