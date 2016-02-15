<?php
	//las variables
	$edad = 20;
	$mensaje1 = "Regresa a tu casa chibolo";
	$mensaje2 = "Adelante caballero, gaste su dinero";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	//la condición
	if($edad>18){
		echo $mensaje2;
	}else{
		echo $mensaje1;	
	}
	
?>

</body>
</html>