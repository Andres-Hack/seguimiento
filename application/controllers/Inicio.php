<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$result = [];
		$estado = [];
		$dep = $this->input->post('dep');
		$cod = $this->input->post('cod');
		$estado = $this->input->post('estado');
		$tipo = $this->input->post('tipo');

		$this->load->view('/guest/header');
		if ($dep != null) {
	        $this->load->model('matris');
			$result = $this->matris->getPostByCode($dep, $cod, $estado, $tipo);
			$estado = $this->matris->getPostByEstado($cod);
			$data = array('consulta' => $result, 'mensaje' => $estado, 'x' => $cod);
			$this->load->view('inicio', $data);
	     }
	     else{
	     	$this->load->view('inicio2');
	     }	
	     $this->load->view('/footer/footer');
    	
		
	}
}

?>
