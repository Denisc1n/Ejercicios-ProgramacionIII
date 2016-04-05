<?php

/*	1- si es un ingreso lo guardo en ticket.txt
 	2- si es salida leo el archivo:
 	leer del archivo todos los datos, guardarlos en un array
	si la patente existe en el archivo .
	 sobreescribo el archivo con todas las patentes
	 y su horario si la patente solicitada
	... calculo el costo de estacionamiento a 
	20$ el segundo y lo muestro.
	si la patente no existe mostrar mensaje y 
	el boton que me redirija al index  
	3- guardar todo lo facturado en facturado.txt*/

$accion=$_POST["estacionar"];
$patente=$_POST["patente"];
$ahora=date("Y-M-d h:i:s");
$listaDeAutos=array();
$listaAuxiliar=array();

if ($accion=="ingreso") {
	echo "Se guardo la patente $patente";
	$archivo=fopen("Ticket.txt", "a");
	fwrite($archivo, "$patente"."-----"."$ahora"."\n");
	fclose($archivo);
}else{
	$archivo=fopen("Ticket.txt", "r");
	while (!feof($archivo)) {
		$renglon=fgets($archivo);
		$auto=explode("-----", $renglon);
		$listaDeAutos[]=$auto;
		echo $auto[0]."<br>";
	}
//var_dump($listaDeAutos);
	fclose($archivo);
	$esta=false;
	foreach ($listaDeAutos as $auto) {
		
		if ($auto[0]==$patente) {
			$esta=true;
			$fechaInicio=$auto[1];
			$diferencia=strtotime($ahora)-strtotime($fechaInicio);
			echo "El tiempo transcurrido es $diferencia";
			echo "<br> Saldo a pagar: $".$diferencia*20;
			//unset($listaDeAutos[$id]);
		}
		else{

			if ($auto[0]!="") {
				$listaAuxiliar[]=$auto; //guarda todo lo que existe. (filtra por vacio/no vacio)
			}
		}


	}	


	if ($esta) {
		echo "<br> El Auto se encuentra estacionado.";
		$archivo=fopen("Ticket.txt", "w");
		foreach ($listaAuxiliar as $auto) {
			if ($auto[0]!=$patente) {
				fwrite($archivo, $auto[0]."-----".$auto[1]);
			}
		}
		fclose($archivo);
	} else{
		echo "El Auto no se encuentra estacionado.";
	}


}

//var_dump($_POST["estacionar"]);
?>
<br>
<br>
<a href="index.php">volver</a>