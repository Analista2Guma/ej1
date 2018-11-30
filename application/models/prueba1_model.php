<?php
//Este es el controlador
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba1_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function crearPersonal($data){
		$this->db->insert('personal',array('nombrePer'=> $data['nombrePer'],'apellidoPer'=> $data['apellidoPer'],'emailPer'=> $data['emailPer'],'direccionPer'=> $data['direccionPer'],'telefonoPer'=> $data['telefonoPer'],'empresaPer'=> $data['empresaPer'],'areaPer'=> $data['areaPer'],'cargoPer'=> $data['cargoPer'],'telEmpPer'=> $data['telEmpPer'],'dirEmpPer'=> $data['dirEmpPer']));
	}



	

	function LeerPersonas(){
		$query = $this->db->query('SELECT * FROM personal');
		if($query->num_rows() > 0) return $query;
		else return false;
	}

	
}

?>