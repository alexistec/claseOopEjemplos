<?php

class Aviso {

	public $texto;
	public $fechaDesde;
	public $fechaHasta;
	public $tieneNegrita;
	public $tieneRecuadro;
	public $importeAPagar;
	public $rubro;
	public $persona;

	public function __construct($texto, $fechaDesde, $fechaHasta) {
		$this->texto = $texto;
		$this->fechaDesde = $fechaDesde;
		$this->fechaHasta = $fechaHasta;
	}

	public function calcularImporteAPagar() {
		$cantidadDias = $this->cantidadDeDias();
		$cantidadPalabras = $this->cantidadDePalabras();
		if ($cantidadPalabras > $this->rubro->cantidadMaximaPalabras) {
			$palabrasAdicionales = $cantidadPalabras - $this->rubro->cantidadMaximaPalabras;
		} else {
			$palabrasAdicionales = 0;
		}
		  
		$result = ($cantidadDias * ($this->rubro->valorPorDia + $palabrasAdicionales * $this->rubro->adicionalPorPalabra));
		return $result;
	}

	private function cantidadDePalabras() {
		/*
		 * se retorna la cantidad de palabras del texto
		 */
		$cantidad = strlen($this->texto);
		return $cantidad;
	}

	private function cantidadDeDias() {
		/*
		 * se resta  fecha hasta - fecha desde
		 * se retorna la diferencia en dias
		 */
		$result = $this->fechaHasta->diff($this->fechaDesde);
		return $result->days;
	}

}

?>