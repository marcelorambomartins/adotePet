<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCaes extends CI_Model
{
	public function insertCao($cao)
	{
		$this->db->insert('cao', $cao);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}

	public function updateCao($id, $cao)
	{
		$this->db->where('id', $id);
		$this->db->update('cao', $cao);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}

	public function selectCaes()
	{
		$this -> db -> select('*');
		$this -> db -> from('cao');
		$query = $this -> db -> get();
		return $query->result_array();
	}


	public function selectCao($id)
	{
		$this -> db -> select('*');
		$this -> db -> from('cao');
		$this -> db -> where('id', $id);
		$query = $this -> db -> get();
		return $query->result_array();
	}
	
	public function filtrarCaes($castrado, $vacinado, $adotado)
	{
		$this -> db -> select('*');
		$this -> db -> from('cao');
		if ($castrado){
			$this -> db -> where('castrado', 1);
		}
		if ($vacinado){
			$this -> db -> where('vacinado', 1);
		}
		if ($adotado){
			$this -> db -> where('adotado', 1);
		}
		$query = $this -> db -> get();
		return $query->result_array();
	}


	public function nextCaoID()
	{
		$next = $this->db->query("SHOW TABLE STATUS LIKE 'cao'");
		$next = $next->row(0);
		return $next->Auto_increment;

	}

}
?>