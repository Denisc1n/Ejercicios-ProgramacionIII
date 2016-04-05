<?php


$precioUno  = $_POST["IngresoUno"];
$precioDos  = $_POST["IngresoDos"];
$precioTres = $_POST["IngresoTres"];


if(isset($_POST["Suma"]))
{
$precioSuma=$precioUno+$precioDos+$precioTres;
echo("Suma:".$precioSuma);
}elseif (isset($_POST["Promedio"])) {
	$precioPromedio=(($precioUno+$precioDos+$precioTres)/3);
	echo "Promedio:"." ".$precioPromedio;
} elseif (isset($_POST["PrecioFinal"])) {
	$precioSuma=$precioUno+$precioDos+$precioTres;
	$PrecioFinal=$precioSuma+($precioSuma*0.21);
	echo "Precio Final:"." ".$PrecioFinal;
}








?>