<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adocoes extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		date_default_timezone_set('America/Sao_Paulo');
	}


	public function listar()
	{
		if(!$_SESSION['logado']){redirect('http://localhost/viralate/pessoas/login');}
		
		$this->load->model('ModelAdocoes','adocoes');
		$dados['listacaes'] = $this->adocoes->selectCaes();
		$this->load->view('viewListagemAdocoes',$dados);
	}



	public function cadastrar($pessoaID,$caoID)
	{
		if(!$_SESSION['logado']){redirect('http://localhost/viralate/pessoas/login');}

		$this->load->model('ModelPessoas', 'pessoa');
		$dadosPessoa = $this->pessoa->selectPessoa($pessoaID);


		if($dadosPessoa['listaCaesAdotar'] != null){
			$listaCaesAdotar = json_decode($dadosPessoa['listaCaesAdotar'],true);
		}

		$listaCaesAdotar[] = $caoID;
		$listaAtualizada = json_encode($listaCaesAdotar);
		$data = array('listaCaesAdotar'=>$listaAtualizada);
		$status = $this->pessoa->alteraPessoa($pessoaID, $data);
		$_SESSION['listaCaesAdotar']=$listaCaesAdotar;



		$adocao = array(
				'pessoaID' 		=> $pessoaID,
				'caoID' 		=> $caoID,
				'status' 		=> 'Pendente',
				'dataCadastro' 	=> date ("Y-m-d")
			);

		$this->load->model('ModelAdocoes','adocoes');
	
		$dados['status'] = $this->adocoes->insertAdocao($adocao);

		redirect('http://localhost/viralate/caes/visualizar/' . $caoID.'/0');
	}


}// fim da classe

?>