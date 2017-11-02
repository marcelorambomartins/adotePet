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
			$dados['validado'] = $this->login->validaEmail($pessoa);
			//FALSE = encontrou email e não pode validar
			//TRUE = nao encontrou nenhum email, logo foi validado
			if($dados['validado'] == TRUE){
				$this->load->model('ModelPessoas','pessoas');
				$dados['status'] = $this->pessoas->insertPessoa($pessoa);
			}else{
				$dados['status'] = 0;
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
			$this->load->model('ModelPessoas', 'login');
			$pessoa = array(
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('password')
			);

			$dadospessoa = $this->login->autenticaPessoa($pessoa);
			$dados['formerror']= NULL;
			if($dadospessoa["id"]):
				$_SESSION['idpessoa']=$dadospessoa['id'];
				$_SESSION['nomepessoa']=$dadospessoa['nome'];
				$_SESSION['email']=$dadospessoa['email'];
				$_SESSION['usertype']=$dadospessoa['userType'];
				redirect('http://localhost/viralate/caes/listar');
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