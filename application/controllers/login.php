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
			$this->load->model('ModelLogarPessoas', 'pessoas');
			$pessoa = array(
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('password')
			);

			$dados['status'] = $this->pessoas->index($pessoa);
			$dados['formerror']=NULL;


			if($dados['status']):
				echo"logado com sucesso";
			else:
				echo"Email ou senha incorretos";
			endif;
		else:
			$this->load->view('login', $dados);
		endif;


	}





}
?>



