<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		date_default_timezone_set('America/Sao_Paulo');
	}


	public function cadastrar()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation','email'));
		//validação do formulário
		$this->form_validation->set_rules('nome','Nome','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Senha','trim|required');


		if($this->form_validation->run()==FALSE):
			$dados['formerror']=validation_errors();
			$dados['status']=NULL;
		else:
			$dados['formerror']=NULL;
			$pessoa = array(
				'nome' => $this->input->post('nome'),
				'sexo' => 'X',
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('password'),
				'userType' => 1,
				'imagem' => 'imagem',
				'dataCadastro' => date ("Y-m-d")
			);

			$this->load->model('ModelPessoas', 'login');
			$dados['status'] = $this->login->validaEmail($pessoa);

			if(!$dados['status']){
				$this->load->model('ModelPessoas','pessoas');
				$dados['status'] = $this->pessoas->insertPessoa($pessoa);
				
			}

			
		endif;


		$this->load->view('viewCadastrarPessoas', $dados);

	}




	public function login()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation','email'));
		//validação do formulário
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Senha','trim|required');
		if($this->form_validation->run()==FALSE):
			$dados['formerror']=validation_errors();
			$dados['f_validado']=NULL;
		else:
			$dados['formerror']=NULL;
			$dados['f_validado']=TRUE;			
		endif;

		if($dados['f_validado']==TRUE):
			$this->load->model('ModelPessoas/validaEmail', 'login');
			$pessoa = array(
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('password')
			);

			$dadospessoa = $this->login->validaEmail($pessoa);
			$dados['formerror']= NULL;

			if($dadospessoa["id"]):
				$_session['idpessoa']=$dadospessoa['id'];
				$_session['nomepessoa']=$dadospessoa['nome'];
				$_session['email']=$dadospessoa['email'];
				$_session['usertype']=$dadospessoa['userType'];

				$this->load->view('index');
			else:
				$dados['loginfail'] = true;
				$this->load->view('login', $dados);
			endif;

		else:
			$this->load->view('login', $dados);
		endif;

	}

}
?>