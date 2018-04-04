<?php


class Documento {

	public function imprimir() {
		echo 'imprimiendo documento....';
	}

}

class Informe extends Documento {

	public function imprimir() {
		echo 'imprimiendo informe....';
	}

}

class CurriculumVitae extends Documento {

	public function imprimir() {
		echo 'imprimiendo CV....';
	}
}


class Impresora {

	public function imprimir(Documento $documento) {
       $documento->imprimir();
       /*
		codigo que implementa la impresion
       */
	}

}


$informe = new Informe();
$cv = new CurriculumVitae();
$impresora = new Impresora();


$impresora->imprimir($informe);
echo '<br>';
$impresora->imprimir($cv);

?>