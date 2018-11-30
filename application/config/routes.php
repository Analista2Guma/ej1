<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'prueba1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Nuevos routers
$route['prueba1/enviado.html'] = 'index.php/prueba1/enviarDatos';