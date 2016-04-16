<?php 

function mayoria_edad($edad){
	
	if($edad>=18){
		return "eres mayor de edad<br>";
	}else{
		return "eres menor de edad<br>";
	}

}

echo mayoria_edad(25);
echo mayoria_edad(12);


 ?>