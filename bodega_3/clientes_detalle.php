 <?php include('includes/header.php'); ?>
  <?php include('includes/botonera.php'); ?>
  <?php include('includes/conexion.php'); ?>

  <?php

  	$id_cliente = $_GET['id_cliente'];
  	
  	$query = "SELECT * FROM clientes
  					WHERE id_cliente = $id_cliente";
  	
  	$row = mysql_query($query);
  	$resultados = mysql_fetch_array($row);


  ?>
<h2><?= $resultados['nombre'].' '.$resultados['apellido'] ?></h2>
  	<ul>
  		<li>Teléfono: <?= $resultados['telefono'] ?></li>
  		<li>Dirección: <?= $resultados['direccion'] ?></li>
  		<li>Activo: <?= $resultados['activo'] ?></li>

    <?php include('includes/foot.php'); ?>