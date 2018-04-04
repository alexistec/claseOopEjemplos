<?php



class Clasificado {

	private $titulo;
	private $precioNegrita;

	private $arrAvisos = new Array();

	public function agregarAviso($aviso) {
		$this->arrAvisos[] = $aviso;

	}

	public function obtenerAvisos() {
		return $this->arrAvisos;
	}

}


class Aviso {

	private $rubro;

	public function setRubro($rubro) {
		$this->rubro = $rubro;
	}

	public function CantidadDeDias() {
		return 5;
	}

	public function CantidadPalabras() {
		return 50;
	}

	public function CalcularImportePagar() {
		$cantidadDias = $this->CantidadDeDias();
		$cantidadPalabras = $this->CantidadPalabras();
		$result = ($cantidadDias * ($this->rubro->valorPorDia + ($cantidadPalabras -  $this->rubro->cantidadMaximaPorRubro) * $this->rubro->adicionalPorPalabra));
		retur $result;
	}



}

class Persona {

}

class Rubro {

	public $valorPorDia;
	private $cantidadMaximaPorRubro;
	private $adicionalPorPalabra;

	public function __construct($valorPorDia, $cantidadMaximaPorRubro, $adicionalPorPalabra) {
		$this->valorPorDia = $valorPorDia;
		$this->cantidadMaximaPorRubro = $cantidadMaximaPorRubro;
		$this->adicionalPorPalabra = $adicionalPorPalabra;
	}

}


$rubro = new Rubro($v1, $v2, $v3);
$aviso = new Aviso();
$aviso->setRubro($rubro);

?>