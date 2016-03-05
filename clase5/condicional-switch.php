<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

	$dia_semana = date("w");
	
	switch($dia_semana){
		case 0:
			$dia_semana = "domingo";
			break;	
			
		case 1:
			$dia_semana = "lunes";
			break;
		case 2:
			$dia_semana= "martes";
			break;
			
		case 3:
			$dia_semana= "miércoles";
			break;
			
		case 4:
			$dia_semana= "jueves";
			break;
			
		case 5:
			$dia_semana= "viernes";
			break;
			
		case 6:
			$dia_semana= "sábado";
			break;
			
	}

?>

<p>Bienvenido, hoy es <?= $dia_semana ?> 27 de febrero del 2016</p>

</body>
</html>