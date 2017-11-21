<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carga extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
     
   public function index(){ 
        $this->load->view('/guest/header');
		$this->load->view('carga' , array('error' => ' ' ));
		$this->load->view('/footer/footer');
   }

   public function do_upload(){

   		$config['upload_path']          = './subidas/';
        $config['allowed_types']        = 'txt';
        $config['max_size']             = 10240;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('userfile'))
       {
               $error = array('error' => $this->upload->display_errors());

               $this->load->view('/guest/header');
				$this->load->view('carga', $error);
				$this->load->view('/footer/footer');
       }
       else
       {
               $data = array('upload_data' => $this->upload->data());

               	$this->load->view('/guest/header', $data);
				$this->load->view('carga', $data);
				$this->load->view('/footer/footer', $data);
       }

    }   
}

?>
