<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


public function index()
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
			$this->load->model('ModelLogarPessoas', 'login');
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



