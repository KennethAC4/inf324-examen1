<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function index2()
	{
		$datos["Nombre"]="Kenneth";
		$datos["Apellido"]="Aliaga Ramirez";
		$datos["Materia"]="INF324";
		$this->load->model("alumnin");
		$datos["estudiante"]=$this->alumnin->getAlumno();
		$this->load->view('welcome_message2', $datos);
	}

	public function eliminar($id = null)
	{
		if(!$id == null)
		{
			$datos["Nombre"]="Kenneth";
			$datos["Apellido"]="Aliaga Ramirez";
			$datos["Materia"]="INF324";
			$this->load->model("alumnin");
			$this->alumnin->elimAlumno($id);
			$datos["estudiante"]=$this->alumnin->getAlumno();
			$this->load->view('welcome_message2', $datos);

		}
	}

	public function agregar()
	{
			$this->load->view('adicionar');

	}

	
	public function sumarnuevo()
	{
		if($this->input->post())	
		{
			$datos["Nombre"]="Kenneth";
			$datos["Apellido"]="Aliaga Ramirez";
			$datos["Materia"]="INF324";
			$this->load->model("alumnin");
			$this->alumnin->addAlumno($_POST["matricula"],$_POST["usuario"],$_POST["email"],$_POST["contra"]);
			$datos["estudiante"]=$this->alumnin->getAlumno();
			$this->load->view('welcome_message2', $datos);
		}
	}
	
	public function modificar($id = null)
	{
		
		if(!$id == null)
		{
			$this->load->model("alumnin");
			$datos["estudiante"]=$this->alumnin->escAlumno($id);
			$this->load->view('modd', $datos);

		}

	}
	public function estudiantemod($id = null)
	{
		if(!$id == null)
		{
			if($this->input->post())	
			{
				$datos["Nombre"]="Kenneth";
				$datos["Apellido"]="Aliaga Ramirez";
				$datos["Materia"]="INF324";
				$this->load->model("alumnin");
				$this->alumnin->modAlumno($id,$_POST["usuario"],$_POST["email"],$_POST["contra"]);
				$datos["estudiante"]=$this->alumnin->getAlumno();
				$this->load->view('welcome_message2', $datos);
			}
		}
	}
	
}

