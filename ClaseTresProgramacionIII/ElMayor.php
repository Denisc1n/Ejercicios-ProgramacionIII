<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">

<input type="Text" name="Primero">
<input type="Text" name="Segundo">
<input type="Text" name="Tercero">
<input type="Submit" value="Calcular">


</form>
<?php

var_dump($_POST);
$max = max($_POST);
echo "<br>"."<br>".$max;
?>

</body>
</html>