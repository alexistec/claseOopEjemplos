<?php


class Transporte { 


    private $asientos;
    private $volante;


    public function encenderLuz() {
    	echo 'encender luz...';
    }

    public function apagarLuz() {

    }

  	public function encender() {
  		echo 'encender...clase padre';
		
	}

}

class Rodado extends Transporte {
	private $ruedas;


}

class Auto extends Rodado {

	public function andar() {
		echo 'andar auto';
	}

}

class Moto extends Rodado {

}

class Lancha extends Transporte {
	private $helices;
}

class Avion extends Rodado {

	public function encender() {
		echo 'encender ...clase avion';
	}

	public function andar() {
		echo 'andar avion...';
	}

}


$avion = new Avion();
$auto = new Auto();
$moto = new Moto();
$lancha = new Lancha();

$auto->andar();
echo '<br>';

$avion->andar();
echo '<br>';
echo '<br>';


class Persona {

	public function andar($transporte) {
		$transporte->andar();
	}

}


$juana = new Persona();
$mario = new Persona();

$juana->andar($avion);
echo '<br>';
$mario->andar($auto);




?>