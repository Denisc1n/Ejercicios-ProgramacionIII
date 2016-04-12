<?php

$largo = $_POST["Largo"];
$ancho = $_POST["Ancho"];
$radio = $_POST["Radio"];


if (isset($_POST["Rectangulo"])) {

	$perimetroAlambre=($largo*$ancho)*3;

	echo "Total de Alambre en Perimetro Rectangular: ".$perimetroAlambre;
} elseif (isset($_POST["Circulo"])) {
		
	$radioAlambre = pow((pi()*$radio),2)*3;
		echo "Diametro Alambre".$radioAlambre;
}elseif(isset($_POST["Materiales"])){

	$totalCal=($largo*$ancho)*3;
	$totalCemento=($largo*$ancho)*2;
	$total=$totalCal+$totalCemento;
	echo"Total de Materiales: ".$total;
	
}

?>