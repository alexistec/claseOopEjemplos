<?php

class Clasificado {

	public $titulo;
	public static $precioNegrita = 15;
	public static $precioRecuadro = 20;
	private $arrAvisos;

	public function __construct($titulo) {
		$this->titulo = $titulo;
		$this->arrAvisos = new ArrayObject();
	}

	public function agregarAvisoClasificado($aviso) {
		// antes de agregar hago el calculo final del importe a pagar por el aviso
		$aviso->importeAPagar = $this->calcularImportePorAviso($aviso);
		// agrego al array
		$this->arrAvisos->append($aviso);
	}

	public function obtenerAvisos() {
		return $this->arrAvisos;
	}

	private function calcularImportePorAviso($aviso) {
		$importeAPagar = $aviso->calcularImporteAPagar();
		if ($aviso->tieneNegrita) {
			$importeAPagar = $importeAPagar + self::$precioNegrita;
		}

		if ($aviso->tieneRecuadro) {
			$importeAPagar = $importeAPagar + self::$precioRecuadro;
		}

		return $importeAPagar;
    }

}

?>