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

			echo $this->input->post('castrado');
			echo $this->input->post('vacinado');
			$adotado = $this->input->post('adotado');
			var_dump($adotado);


			/*
			$dados['formerror']=NULL;
			$cao = array(
				'nome' => $this->input->post('nome'),
				'idade' => $this->input->post('idade'),
				'porte' => $this->input->post('porte'),
				'castrado' => $this->input->post('castrado'),
				'vacinado' => $this->input->post('vacinado'),
				'adotado' => $this->input->post('adotado'),
				'imagem' => 'imagem',
				'dataCadastro' => date ("Y-m-d")
			);

			
			$this->load->model('ModelCaes','caes');
			$dados['status'] = $this->pessoas->insertCao($cao);

			*/
		endif;


		$this->load->view('viewCadastrarCaes');

	}

}
?>