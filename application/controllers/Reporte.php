<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte extends CI_Controller {

	public function index()
	{
		$dep = $this->input->post('departamento');

		$this->load->model('matris');
		$result = $this->matris->getPostByDepartamento($dep);

		$suma1 = 0; $suma2 = 0; $ct1 = 0; $ct2 = 0;
    	foreach($result as $fila)
    	{
    		$suma1 = $suma1+(int)$fila->av_financiero;
    		$ct1 = $ct1+1;
    	}
    	foreach($result as $fila)
    	{
    		$suma2 = $suma2+(int)$fila->av_fisico;
    		$ct2 = $ct1+1;
    	}
    	$prom1=round(($suma1/$ct1), 2);
    	$prom2=round(($suma2/$ct2), 2);



    	$data = array('prom1' => $prom1, 'prom2' => $prom2, 'dep' => $dep);
		$this->load->view('/guest/header', $data);
		$this->load->view('reporte', $data);
		$this->load->view('/footer/footer', $data);

	}
}

?>
