<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

//variables
$nombre = "Pedro ";
$edad = "26";
$dia = "sábado";
$mensaje = "Buenos días";
$hermano = "Luis";
$hermana = "Sara";

$semanas = 4; //catidad de semanas
$horas = 6; //horas diarias


//concatenacion

/*-----EJEMPLO 1---*/
echo $nombre." hoy es ".$dia."<br>";
//Pedro tiene una hermana llamada Sara, su hermano es Luis y tiene 26 años de edad. Buenos dias Pedro.

echo $nombre." tiene una hermana llamada ".$hermana.", su hermano es ".$hermano." y tiene ".$edad." años de edad. ".$mensaje;


/*-----EJEMPLO 2---*/
// pedro trabaja x horas al mes
$horas_x_mes = $horas*5*$semanas;

echo "<hr>".$nombre." trabaja ".$horas_x_mes." horas al mes";



?>

</body>
</html>