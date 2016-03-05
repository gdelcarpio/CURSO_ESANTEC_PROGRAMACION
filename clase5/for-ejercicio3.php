<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 

$dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');

for($i=0; $i<count($dias); $i++){

	echo $dias[$i];
	echo "<br>";
}

?>
</body>
</html>