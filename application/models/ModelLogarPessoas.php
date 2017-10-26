<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogarPessoas extends CI_Model
{
	public function index($pessoa){
		$this -> db -> select('id, email, senha');
		$this -> db -> from('pessoa');
		$this -> db -> where('email', $pessoa['email']);
		$this -> db -> where('senha', $pessoa['senha']);
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1){
		    return $query->result();
		}
		else{
		    return false;
		}	
	}	
}
?>