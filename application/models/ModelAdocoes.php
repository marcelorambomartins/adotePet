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
		$this-> db ->distinct('adocao.caoID');
		$this -> db -> select('cao.id, cao.nome as nomecao, pessoa.nome as nomepessoa, cao.idade, cao.porte, cao.raca, cao.sexo, cao.imagem, cao.vacinado, cao.castrado, cao.adotado, cao.descricao, cao.dataCadastro');
		$this -> db -> from('cao');
		$this->db->join('adocao', 'cao.id = adocao.caoID');		
		$this->db->join('pessoa', 'pessoa.id = adocao.pessoaID');				
		$query = $this -> db -> get();
		return $query->result_array();
	}

	public function selectPessoas()
	{
		$this -> db -> select('pessoa.id, pessoa.nome, pessoa.email');
		$this -> db -> from('pessoa');
		$this->db->join('adocao', 'pessoa.id = adocao.pessoaID');		
		$this->db->join('cao', 'cao.id = adocao.caoID');		
		$query = $this -> db -> get();
		return $query->result_array();
	}


}
?>