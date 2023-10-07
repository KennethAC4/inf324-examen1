<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class alumnin extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAlumno()
    {
        $datos = $this->db->query("select * from estudiante");
        return($datos->result_array());
    }
	
}