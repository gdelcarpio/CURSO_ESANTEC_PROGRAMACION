<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php 
	//variable
	$nota = 9;

	//la condicional
	if($nota<11){ 
		echo "Has desaprobado";
	}else if($nota>=11 AND $nota<=15 ){  
		echo "Puedes mejorar";		
	}else if($nota>=16 AND $nota<=18){ 
		echo "Buen trabajo";
	}else{
		echo "Felicitaciones";		
	}
	

?>


</body>
</html>