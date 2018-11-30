<?php
//Este es el controlador
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba1 extends CI_Controller {
  use MY_Controller;
	function __construct(){
		parent::__construct();
    $this->load->helper('url');
    $this->removeCache();
	}

//Forma numero 1 para enviar emails
	function sendMail(){
		$this->load->library('email');
		$configuraciones['mailtype'] = 'html';
		$this->email->initialize($configuraciones);
		$this->email->from('enniosaenz@gmail.com','Ennio Sáenz');
		$this->email->to('variable@correo.com');
		$this->email->subject('Variable subject');
		$this->email->message('Variable del mensaje a enviar');
		$this->email->send();

		if($this->email->send()){
			echo "Correo enviado";

		}else{
			echo "Correo no enviado";
			echo $this->email->print_debugger();
		}
	}
	