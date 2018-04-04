<?php

class Persona {

	public $apellido;
	public $nombre;
	public $dni;
	public $direccion;
	public $telefono;
	public $email;

	public function __construct($apellido, $nombre) {
		$this->apellido = $apellido;
		$this->nombre = $nombre;
	}

}

?>