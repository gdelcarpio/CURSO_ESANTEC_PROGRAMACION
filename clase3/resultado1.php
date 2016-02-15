<?php
	//las variables
	$edad = $_POST['edad'];
	$nombre = $_POST['nombre'];
	$mensaje1 = "Por lo tanto si puedes pasar";
	$mensaje2 = "Por lo tanto no puedes pasar";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<h3><?php echo $nombre; ?></h3>

<?php 
		
		if($edad >= 18){
			echo "Tu edad es: ".$edad.". ".$mensaje1;
		}else{
			echo "Tu edad es: ".$edad.". ".$mensaje2;
		}
?>

</body>
</html>