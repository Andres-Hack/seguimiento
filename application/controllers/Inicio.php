<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$cod = $this->input->post('cod');
		$nom_cod = $this->input->post('nom_cod');
		$tipo = $this->input->post('tipo');

		$this->load->model('matris');
		$result = $this->matris->getPostByCode($cod, $nom_cod, $tipo);
		$estado = $this->matris->getPostByEstado($cod);

    	$data = array('consulta' => $result, 'mensaje' => $estado, 'x' => $cod);
		$this->load->view('/guest/header', $data);
		$this->load->view('inicio', $data);
		$this->load->view('/footer/footer', $data);
	}
}

?>
