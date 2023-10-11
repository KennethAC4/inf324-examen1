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

    public function escAlumno(int $ci)
    {
        $datos = $this->db->query("select * from estudiante where matricula = '$ci'");
        return($datos->result_array());
    }

    public function elimAlumno(int $ci)
    {
        $this->db->query("delete from estudiante where matricula = {$ci}");

    }

    public function addAlumno(int $ci, string $usuario,string $email, string $contraseña)
    {
        $this->db->query("insert into estudiante(matricula,usuario,email,contraseña) values('$ci','$usuario','$email','$contraseña')");
        
    }

    public function modAlumno(int $ci, string $usuario,string $email, string $contraseña)
    {
        $this->db->query("update estudiante set usuario = '$usuario', email = '$email', contraseña = 'contraseña' where matricula = '$ci'");
        
    }
	
}