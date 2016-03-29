<html>
<head>
	<title></title>
</head>
<body>
Fernando
<?php

//include_once"alumno.php"; // incluye una sola vez la pagina - si no funciona me devuele un warning
require_once"alumno.php";  // una unica vez - si o si ncesesito el archivo

//include"alumno.php"; 
//require"alumno.php";

echo "HOLA";

$numero= 19;
$nombre= "Juan";

echo "<br>";


echo "<br><br>";
print("Su nombre es ".$nombre);
echo "<br>";

	if($numero > 18)
	{
		echo ("Es mayor de edad");	
	}

	else
	{
		echo ("Es menor de edad");
	}

//echo "<h1>."$nombre".<h1>";


$miArray= array(2, 4, 6);


foreach ($miArray as $elemento) {
	echo("<br>");
	echo $elemento;
}

echo("<br><br>");
var_dump($miArray);

$miNuevoArray= array("pizza" => 20, "cocacola" => 25, "empanada" => 15);

echo("<br><br>");
var_dump($miNuevoArray);

$arrayClaveValor= array("nombre" => "Belen", "apellido" => "Mayo", "soltero" => true, "fechaDeNacimiento" => "06/05/1988");

echo("<br><br>");
var_dump($arrayClaveValor);

$arrayVacio= array();

$arrayVacio[0]= "Hola";

echo("<br><br>");
var_dump($arrayVacio);

$arrayVacio[]= "Chau";

echo("<br><br>");
var_dump($arrayVacio);

$arrayVacio[]= $miNuevoArray;

echo("<br><br>");
var_dump($arrayVacio);

$arrayVacio["productos"]= $miNuevoArray;

echo("<br><br>");
var_dump($arrayVacio);

echo("<br><br>");

echo $arrayVacio["productos"]["pizza"];

$miObjeto= new stdClass();

$miObjeto->nombre="Fernando";
$miObjeto->apellido="Rivara";
$miObjeto->soltero=true;

echo("<br><br>");
var_dump($miObjeto); 

$miObjeto->productos=$miNuevoArray;

	$yo=new Alumnos;
	$yo->nombre="Belen";
	$yo->apellido="Mayo";

	echo("<br><br>");
	var_dump($yo);

	$yo->Mostrar();

	$yo->soltero=true;

	Alumnos::MostrarEstatico($yo);

	echo("<br><br>");
	echo $yo->soltero;

	foreach ($yo as $atributo) {
		var_dump($atributo);
	}

	//echo $yo["nombre"];    NO se puede hacer

	//echo $arrayClaveValor->$nombre;     NO se puede hacer


?>
</body>
</html>