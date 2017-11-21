<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carga extends CI_Controller {

	public function index()
	{
		$this->load->view('/guest/header');
		$this->load->view('carga');
		$this->load->view('/footer/footer');
	}
}

?>
