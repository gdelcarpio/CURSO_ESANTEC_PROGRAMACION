<?php include('includes/conexion.php'); ?>
<?php 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$query = "INSERT INTO clientes(nombre,apellido,telefono,direccion,activo) 
               values('$nombre','$apellido','$telefono','$direccion',1)";
mysql_query($query);
header('Location:clientes_lista.php');
 ?>