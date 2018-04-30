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
		//$this-> db ->distinct('adocao.caoID');
		$this -> db -> select('cao.id, cao.nome as nomecao, pessoa.nome as nomepessoa, cao.imagem');
		$this -> db -> from('cao');
		$this->db->join('adocao', 'cao.id = adocao.caoID');		
		$this->db->join('pessoa', 'pessoa.id = adocao.pessoaID');				
		$query = $this -> db -> get();
		return $query->result_array();
	}

}
?>