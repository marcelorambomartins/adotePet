<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdocoes extends CI_Model
{

	public function insertAdocao($adocao)
	{
		$this->db->insert('adocao', $adocao);
		return $this->db->affected_rows(); //retorna quantas linhas foram afetadas
		
	}
	
	public function selectCaes()
	{


		$this -> db -> select('cao.id, cao.nome, cao.idade, cao.porte, cao.raca, cao.sexo, cao.imagem, cao.vacinado, cao.castrado, cao.adotado, cao.descricao, cao.dataCadastro');
		$this -> db -> from('cao');
		$this->db->join('adocao', 'cao.id = adocao.caoID');		
		$query = $this -> db -> get();
		return $query->result_array();
	}

}
?>