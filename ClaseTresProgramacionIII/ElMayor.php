<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">

<input type="Text" name="Primero">
<input type="Text" name="Segundo">
<input type="Text" name="Tercero">
<input type="Submit" name="Uno"value="Calcular">
<input type="Submit" name="Dos"value="Hacer">
<input type="Submit" name="Tres" value="Otro Boton">  



</form>
<?php

if (isset($_POST['Uno'])) {
	echo"<br>"."UNO"."<br>";
		
}
elseif (isset($_POST['Dos'])) {
	echo "<br>"."DOS"."<br>";
}
elseif (isset($_POST['Tres'])) {
	echo"<br>"."DOS"."<br>";;
}

var_dump($_POST);
$max = max($_POST);
echo "<br>"."<br>".$max;
?>

<!--isset() devuelve true si esta seteado o false si es null.  -->

</body>
</html>