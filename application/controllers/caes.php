<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caes extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		date_default_timezone_set('America/Sao_Paulo');
	}


	public function cadastrar()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation'));
		//validação do formulário
		$this->form_validation->set_rules('nome','Nome','trim|required');
		$this->form_validation->set_rules('idade','Idade','trim|required');
		$this->form_validation->set_rules('porte','Porte','required');


		if($this->form_validation->run()==FALSE):
			$dados['formerror']=validation_errors();
			$dados['status']=NULL;
		else:

			$dados['formerror']=NULL;
			$dados['status']=NULL;

			
			if($this->input->post('castrado') == null){
					$castrado = false;
			}else{
					$castrado = true;
			}

			if($this->input->post('vacinado') == null){
					$vacinado = false;
			}else{
					$vacinado = true;
			}

			if($this->input->post('adotado') == null){
					$adotado = false;
			}else{
					$adotado = true;
			}
			
			
			$cao = array(
				'nome' => $this->input->post('nome'),
				'idade' => $this->input->post('idade'),
				'porte' => $this->input->post('porte'),
				'castrado' => $castrado,
				'vacinado' => $vacinado,
				'adotado' => $adotado,
				'imagem' => 'imagem',
				'dataCadastro' => date ("Y-m-d")
			);

			
			$this->load->model('ModelCaes','caes');
			$dados['status'] = $this->caes->insertCao($cao);

			
		endif;


		$this->load->view('viewCadastrarCaes',$dados);

	}


	public function listar()
	{
		$this->load->model('ModelCaes','caes');
		$dados['listacaes'] = $this->caes->selectCaes();
		$this->load->view('listagemcaes',$dados);
	}

	public function filtrar()
	{
		$castrado = NULL;
		$vacinado = NULL;
		$adotado = NULL;

		if (isset($_POST['castrado'])){
			$castrado = TRUE;
		}
		if (isset($_POST['vacinado'])){
			$vacinado = TRUE;
		}
		if (isset($_POST['adotado'])){
			$adotado = TRUE;
		}
		$this->load->model('ModelCaes','caes');
		$dados['listacaes'] = $this->caes->filtrarCaes($castrado,$vacinado,$adotado);
		$this->load->view('listagemcaes',$dados);
	}



	public function visualizar($id){
		echo "cao de ID: " . $id;

		$this->load->model('ModelCaes','caes');
		$dados['dadosCao'] = $this->caes->selectCao($id);

		var_dump($dados['dadosCao']);

		$this->load->view('viewPerfilCao',$dados);
	}

}
?>