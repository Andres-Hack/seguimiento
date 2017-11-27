<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Matris extends CI_Model
  {

    public function getPost()
    {
      return $this->db->get('matris');
    }

    public function getPostByCode($dep, $cod, $estado, $tipo)
    {
      $query = "SELECT * FROM matris WHERE id >1 ";
      if ($dep != null) {
        $query = $query." and departamento='".$dep."' ";
      }
      if ($cod != null) {
        $query = $query." and num='".$cod."' ";
      }
      if ($estado != null) {
        $query = $query." and estado='".$estado."'";
      }
      if ($tipo != null) {
        $query = $query." and tipo='".$tipo."' ";
      }
      $result = $this->db->query($query);
      return $result->result();
    }

    public function getPostByEstado($cod)
    {
      $result = $this->db->query("SELECT estado, gestion_aprobacion, proyecto_nombre FROM matris WHERE num='".$cod."' LIMIT 1");
      return $result->result();
    }

    public function getPostByDepartamento($dep)
    {
      if ($dep != null) {
        $result = $this->db->query("SELECT av_fisico, av_financiero FROM matris WHERE departamento='".$dep."'");
      }
      else{
        $result = $this->db->query("SELECT av_fisico, av_financiero FROM matris");
      }      
      return $result->result();
    }

    public function getPostFecha($dep)
    {
      for ($j=1; $j <= 10 ; $j++) { 
        if ($j!=10) {
          $q = "0"+$j;
        }
        $resultA = $this->db->query("SELECT SUM(av_financiero) AS total FROM matris WHERE departamento='".$dep."' AND fecha_seguimiento LIKE '%".$q."/2017%'");
        $resultA2 = $this->db->query("SELECT COUNT(*) AS filas FROM matris WHERE departamento='".$dep."' AND fecha_seguimiento LIKE '%".$q."/2017%'"); 

        foreach($resultA2->result() as $fila)
            {
               $div = $fila->filas;
            }
        foreach($resultA->result() as $fila)
            {
              if ($fila->total != 0) {
                $resultAA[$j] = $fila->total/$div;
              }
              else{
                $resultAA[$j] = 0;
              }
            }
      }
      for ($j=1; $j <= 10 ; $j++) { 
        if ($j!=10) {
          $q = "0"+$j;
        }
        $resultB = $this->db->query("SELECT SUM(av_fisico) AS total FROM matris WHERE departamento='".$dep."' AND fecha_seguimiento LIKE '%".$q."/2017%'");
        $resultB2 = $this->db->query("SELECT COUNT(*) AS filas FROM matris WHERE departamento='".$dep."' AND fecha_seguimiento LIKE '%".$q."/2017%'");

        foreach($resultB2->result() as $fila)
            {
               $div = $fila->filas;
            }
        foreach($resultB->result() as $fila)
            {
              if ($fila->total != 0) {
                $resultBB[$j] = $fila->total/$div;
              }
              else{
                $resultBB[$j] = 0;
              }
            }
      }

      //echo $resultBB[10];
      //exit(0);


      $datos01 = array('av_financiero' => $resultAA, 'av_fisico' => $resultBB);
      return $datos01;
    }
  }
?>
