<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

$edad = 25;
$mentira = true;
$pais = "Perú";
$colores = array('rojo','verde','azul');

print_r($colores);
echo $edad;
$edad = 30;
echo $edad;
echo "<hr>";

$dato = array($edad, $mentira, $pais);

print_r($dato);



 ?>
</body>
</html>