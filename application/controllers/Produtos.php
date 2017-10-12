<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		$this->load->model('produtos_model','produtos');
		
		$data['produtos'] = $this->produtos->getProdutos();
		
		$this->load->view('listarprodutos', $data);
	}
}
?>