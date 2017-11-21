<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Matris extends CI_Model
  {

    public function getPost()
    {
      return $this->db->get('matris');
    }

    public function getPostByNumero($numero='')
    {
      $result = $this->db->get("SELECT * FROM matris WHERE num='".$numero."'");
      return $result->row();
    }

    public function getPostByCode($cod, $nom_cod, $tipo)
    {
      $query = "SELECT * FROM matris WHERE id >1 ";
      if ($cod != null) {
        $query = $query." and num='".$cod."' ";
      }
      if ($tipo != null) {
        $query = $query." and tipo='".$tipo."' ";
      }
      if ($nom_cod != null) {
        $query = $query." and proyecto_nombre='".$nom_cod."'";
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

  }

?>
