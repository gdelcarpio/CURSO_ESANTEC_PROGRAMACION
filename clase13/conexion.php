<?php 

$link = mysql_connect('localhost','root','123');
mysql_select_db("club",$link);


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$query = "INSERT INTO socios(nombre,apellido,edad) 
values('$nombre','$apellido',$edad)";



mysql_query($query,$link);

 ?>

 se inserto crrectamente