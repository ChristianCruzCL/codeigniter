<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller { //Por defecto se tiene que crear una función index, esta se ejecutará cuando accedamos al contenido cuando intentemos ingresar a la aplicación web o la url http://localhost/codeigniter/index.php/controlador.php (Si no se especifica una funcion, cargara la funcion index.)
	function __construct(){
		parent::__construct(); //Siempre en el controlador hay que escribir el parent para que ejecute el contructor padre de la clase CI_Controller.
		//$this->load->helper('mihelper'); // Cargamos un solo helper con todas las funciones programadas.
		$this->load->helper(array('mihelper','mihelper2')); //Cargamos los 2 helpers en un array
		$this->load->library('Mi_clase'); //Cargamos la libreria en el controlador.
		$this->load->library('Mi_clase2'); // Cargamos la libreria nen el controlador.
		$this->load->library('calendar'); //Cargamos una libreria predeterminada de CI de calendario
	}
	function index(){// Esta es la funcion que se cargará cuando ejecutemos el controlador controlador.php

		$this->load->view('bienvenido'); //ESCRIBIR ESTO DESPUES DE CREAR LA VISTA BIENVENIDO.PHP En la funcion esta cargando una vista, esta vista la podemos encontrar en la carpeta views, es decir, no cargará el contenido de la vista que esta funcion ejecute.
		$this->mi_clase->pruebafuncion(); //Cargamos la libreria para que pueda ser visualizada en el index
		$this->mi_clase2->bucleforlibreriatablasmultiplicar(); //Cargamos la libreria para que sea viualizada
		echo $this->calendar->generate();

	}
	function encabezados(){ //ABRIR bienvenido2.php
		//$this->load->view('encabezados');
		$this->load->view('bienvenido2');
	}
}
?>
