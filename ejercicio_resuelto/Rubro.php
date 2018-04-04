<?php

class Rubro {

	public $descripcion;
	public $adicionalPorPalabra;
	public $cantidadMaximaPalabras;
	public $valorPorDia;

	public function __construct($descripcion) {
		$this->descripcion = $descripcion;
	}

}

?>