<?php include('includes/conexion.php');?>
<?php
	 
	 $variable = $_GET['id_cliente'];

	 $query = "DELETE FROM clientes 
	 		   WHERE id_cliente = $variable";
	 mysql_query($query);
	 header('Location:clientes_lista.php'); 	

?>