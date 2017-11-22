<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Cargar extends CI_Model
  {

    public function getPostArchivo($archivo)
    {
      $result = $this->db->query("LOAD DATA LOCAL INFILE 'C:/xampp/htdocs/upc_seguimiento/subidas/".$archivo.".txt' INTO TABLE matris  FIELDS TERMINATED BY ';'");
      return true;
    }

  }

?>
