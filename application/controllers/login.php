<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}




	public function index()
	{
		$this->load->view('login');
	}

	public function logar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validação do formulário
		$this->form_validation->set_rules('nome','Nome','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('assunto','Assunto','trim|required');
		$this->form_validation->set_rules('mensagem','Mensagem','trim|required');
		if($this->form_validation->run()==FALSE):
			$dados['formerror']=validation_errors();
		else:
			$dados['formerror']=NULL;
		endif;


	}
}
?>