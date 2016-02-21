<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>


<?php

$producto = $_POST['producto'];

//condicional

if($producto==1){
	echo "el precio es 20";
}else if($producto==2){
	echo "el precio es 130";
}else if($producto==3){
	echo "el precio es 245";
}else if($producto==4){
	echo "el precio es 675";
}
		


 ?>
 
</body>
</html>