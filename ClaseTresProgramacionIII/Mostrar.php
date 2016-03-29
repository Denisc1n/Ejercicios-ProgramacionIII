<h1>Datos Recibidos</h1>
<?php


echo"Recibidos<br>";
var_dump($_POST);
$nombre = $_POST['Usuario'];
$password=$_POST['Clave'];
echo "<br>$nombre<br>";
//var_dump($_GET);
if($nombre=="Admin" && $password=="1234"){
Include "Bienvenido.html";
}
else{
Include "NoLogueado.html";

}

?>