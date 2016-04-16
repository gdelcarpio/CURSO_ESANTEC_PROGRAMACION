<?php 

$resultado = $_POST['p1'] + 
			 $_POST['p2'] + 
			 $_POST['p3'] + 
			 $_POST['p4'];

if($resultado ==20){
	echo "Excelente";
}else if($resultado==15){
	echo "Muy bien"
}else if($resultado==10){
	echo "Puedes mejorar";
}else if($resultado==0){
	echo "Malazo";
}

 ?>