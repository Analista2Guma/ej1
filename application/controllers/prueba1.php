<?php
//Este es el controlador
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba1 extends CI_Controller {
  use MY_Controller;
	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('prueba1_model');
    $this->load->helper('url');
    $this->removeCache();
    
	}
	
	public function index()
	{
    $this->load->view('header');
		$data['LeerPer'] = $this->prueba1_model->LeerPersonas();
		$this->load->view('ejercisio1',$data);
    $this->load->view('footer');
  
	}


	function enviarDatos(){

    if (isset($_POST['agrager'])) { 
		$data = array(
			'nombrePer' => $this->input->post('nombre'),
			'apellidoPer' => $this->input->post('apellido'),
			'emailPer' => $this->input->post('email'),
			'direccionPer' => $this->input->post('direccion'),
			'telefonoPer' => $this->input->post('telefono'),
			'empresaPer' => $this->input->post('empresa'),
			'areaPer' => $this->input->post('area'),
			'cargoPer' => $this->input->post('cargo'),
			'telEmpPer' => $this->input->post('telefonoEmp'),
			'dirEmpPer' => $this->input->post('direccionEmp')
		);

      $this->prueba1_model->crearPersonal($data);
        echo "Registros por POST";
       //redirect(base_url());      
    
    }else
    {
      $dataAjax = $this->input->post();

      $info = array(      
        "nombrePer" => $dataAjax['nombre'],
        "apellidoPer" => $dataAjax['apellido'],
        "emailPer" => $dataAjax['email'],
        "direccionPer" => $dataAjax['direccion'],
        "telefonoPer" => $dataAjax['telefono'],
        "empresaPer" => $dataAjax['empresa'],
        "areaPer" => $dataAjax['area'],
        "cargoPer" => $dataAjax['cargo'],
        "telEmpPer" => $dataAjax['telefonoEmp'],
        "dirEmpPer" => $dataAjax['direccionEmp']
      );
      
       $this->prueba1_model->crearPersonal($info);
       echo "Registro Guardado por AJAX";
       //redirect(base_url());
        
      
      
    }
	}


	public function mostrarDatos()
    {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


           $personas = $this->prueba1_model->LeerPersonas();


           

         


          $data = array();

          foreach($personas->result() as $campo) {

               $data[] = array(
               		$campo->IdPer,
                    $campo->nombrePer,
                    $campo->apellidoPer,
                    $campo->emailPer,
                    $campo->direccionPer,
                    $campo->telefonoPer,
                    $campo->empresaPer,
                    $campo->areaPer,
                    $campo->cargoPer,
                    $campo->telEmpPer,
                    $campo->dirEmpPer
               );
          }

          
          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $personas->num_rows(),
                 "recordsFiltered" => $personas->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();

          $this->load->view('ejercisio1',array());
     }


}
?>
