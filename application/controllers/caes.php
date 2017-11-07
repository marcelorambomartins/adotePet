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
		$this->form_validation->set_rules('raca','Raça','required');
		$this->form_validation->set_rules('sexo','Sexo','required');
		$this->form_validation->set_rules('descricao','Descrição','required');


		if($this->form_validation->run()==FALSE):
			$dados['formerror']=validation_errors();
			$dados['status']=NULL;
		else:
			$dados['status']=NULL;
			$type = $_FILES['imagem']['type'];
			$tipo = $type;
			$tipo = str_replace("image/","",$tipo);
			if($tipo == 'jpeg'){
				$tipo = 'jpg';
			}
			$tempo = time();
			$name = $tempo.'.'.$tipo;
			$configuracao = array(
				'upload_path'   => './images/',
				'allowed_types' => 'jpg|png',
				'file_name'     => $tempo,
				'max_size'      => '5000'
			);
            $this->load->library('upload');	
            $this->upload->initialize($configuracao);		

            if ( ! $this->upload->do_upload('imagem'))
            {
				echo 'erro no upload da foto';
            }
            else
            {
            	$data = array('upload_data' => $this->upload->data());
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
					'raca' => $this->input->post('raca'),
					'sexo' => $this->input->post('sexo'),
					'castrado' => $castrado,
					'vacinado' => $vacinado,
					'adotado' => $adotado,
					'imagem' => $name,
					'descricao' => $this->input->post('descricao'),
					'dataCadastro' => date ("Y-m-d")
				);
				$this->load->model('ModelCaes','caes');
				$dados['status'] = $this->caes->insertCao($cao);
			}		
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
			$dados['castrado'] = TRUE;
		}
		if (isset($_POST['vacinado'])){
			$vacinado = TRUE;
			$dados['vacinado'] = TRUE;			
		}
		if (isset($_POST['adotado'])){
			$adotado = TRUE;
			$dados['adotado'] = TRUE;			
		}
		$this->load->model('ModelCaes','caes');
		$dados['listacaes'] = $this->caes->filtrarCaes($castrado,$vacinado,$adotado);
		$this->load->view('listagemcaes',$dados);
	}



	public function visualizar($id){

		$this->load->model('ModelCaes','caes');
		$dados['dadosCao'] = $this->caes->selectCao($id);

		$this->load->view('viewPerfilCao',$dados);
	}

}
?>