<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>


<?php

$producto = $_POST['producto']; // DEL SELECT (COMBOBOX)
$cantidad = $_POST['cantidad']; //campo de texto

$articulo1 = "Ventilador usb (para pc)";
$articulo2 = "Ventilador De pared";
$articulo3 = "Ventilador de oficina";
$articulo4 = "Ventilador industrial";

//condicional

if($producto==1){
	$precio = 20;
	$total = $precio*$cantidad;
	echo "<h2>Su pedido por el ".$articulo1." es: </h2><br>";
	echo "Precio unitario: ".$precio."<br>";
	echo "Cantidad: ".$cantidad."<br>";
	echo "Total del pedido: ".$total;
		
}else if($producto==2){
	$precio = 130;
	$total = $precio*$cantidad;
	echo "<h2>Su pedido por el ".$articulo2." es: </h2><br>";
	echo "Precio unitario: ".$precio."<br>";
	echo "Cantidad: ".$cantidad."<br>";
	echo "Total del pedido: ".$total;
	
}else if($producto==3){
	$precio = 245;
	$total = $precio*$cantidad;
	echo "<h2>Su pedido por el ".$articulo3." es: </h2><br>";
	echo "Precio unitario: ".$precio."<br>";
	echo "Cantidad: ".$cantidad."<br>";
	echo "Total del pedido: ".$total;
	
}else if($producto==4){
	$precio = 675;
	$total = $precio*$cantidad;
	echo "<h2>Su pedido por el ".$articulo4." es: </h2><br>";
	echo "Precio unitario: ".$precio."<br>";
	echo "Cantidad: ".$cantidad."<br>";
	echo "Total del pedido: ".$total;
}
		


 ?>
 
</body>
</html>