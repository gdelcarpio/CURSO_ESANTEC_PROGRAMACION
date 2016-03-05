<?php 

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
    <ul>
    <?php 
		for($i=0; $i<7; $i++){
		
		switch($i){
			case 0:$dia_semana = "domingo";break;			
			case 1:$dia_semana = "lunes";break;
			case 2:$dia_semana= "martes";break;			
			case 3:$dia_semana= "miércoles";break;			
			case 4:$dia_semana= "jueves";break;			
			case 5:$dia_semana= "viernes";break;			
			case 6:$dia_semana= "sábado";break;			
		}
		
		echo "<li>".$dia_semana."</li>";
		
		
		}
	?>
    </ul>



</body>
</html>