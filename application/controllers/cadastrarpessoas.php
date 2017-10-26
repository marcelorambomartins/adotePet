<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarPessoas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{
		
		$this->load->helper('form');
		$this->load->library(array('form_validation','email'));
		//validação do formulário
		$this->form_validation->set_rules('nome','Nome','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Senha','trim|required');


		if($this->form_validation->run()==FALSE):
			$dados['formerror']=validation_errors();
		else:
			$this->load->model('ModelCadastrarPessoas','pessoas');
			$dados['status'] = $this->pessoas->insertPessoa();
			$dados['formerror']=NULL;
		endif;


		$this->load->view('viewCadastrarPessoas', $dados);

	}

}
?>