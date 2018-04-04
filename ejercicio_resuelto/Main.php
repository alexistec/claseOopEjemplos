<?php

require_once 'Persona.php';
require_once 'Rubro.php';
require_once 'Aviso.php';
require_once 'Clasificado.php';


$juanPerez = new Persona('Perez', 'Juan');

$rubro = new Rubro('Ventas');
$rubro->adicionalPorPalabra = 1; // $1 un peso
$rubro->cantidadMaximaPalabras = 100;
$rubro->valorPorDia = 100; // $100 cien pesos

$clasificado = new Clasificado('CLASIFICADO ABC COLOR');

// FECHA DESDE Y HASTA PARA EL AVISO
$fechaDesde = new DateTime('2018-03-10');
$fechaHasta = new DateTime('2018-03-20');

$aviso1 = new Aviso('AVISO 1', $fechaDesde, $fechaHasta);
$aviso1->tieneNegrita = true;
$aviso1->tieneRecuadro = true;
$aviso1->rubro = $rubro; // asigno rubro creado mas arriba
$aviso1->persona = $juanPerez; // asigno persona creada mas arriba

// agrego un aviso al clasificado
$clasificado->agregarAvisoClasificado($aviso1);

// SE CREA UN SEGUNDO AVISO
$fechaDesde = new DateTime('2018-03-15');
$fechaHasta = new DateTime('2018-03-30');

$aviso2 = new Aviso('AVISO 2', $fechaDesde, $fechaHasta);
$aviso2->tieneNegrita = false;
$aviso2->tieneRecuadro = true;
$aviso2->rubro = $rubro; // asigno rubro creado mas arriba
$aviso2->persona = $juanPerez; // asigno persona creada mas arriba

// agrego segundo aviso al clasificado
$clasificado->agregarAvisoClasificado($aviso2);

// muestro en pantalla los importes por avisos
echo '<strong>' . $clasificado->titulo . '</strong><br><br>';

$listadoDeAvisos = $clasificado->obtenerAvisos();

foreach ($listadoDeAvisos as $aviso) {
	echo $aviso->texto . '<br>';
	echo "Importe a pagar: $" . $aviso->importeAPagar . '<br><br>';
}

?>