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
			$dados['status']=NULL;
		else:
			$this->load->model('ModelCadastrarPessoas','pessoas');
			$pessoa = array(
				'nome' => $this->input->post('nome'),
				'sexo' => 'M',
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('password'),
				'userType' => 1,
				'imagem' => 'imagem',
				'dataCadastro' => '2017-10-26'
			);

			$dados['status'] = $this->pessoas->insertPessoa($pessoa);
			$dados['formerror']=NULL;
		endif;


		$this->load->view('viewCadastrarPessoas', $dados);

	}

}
?>