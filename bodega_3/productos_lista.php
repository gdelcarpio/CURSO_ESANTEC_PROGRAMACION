 <?php include('includes/header.php'); ?>
  <?php include('includes/botonera.php'); ?>
  <?php include('includes/conexion.php'); ?>


<?php 
	$query = "SELECT * FROM productos";
	$rows = mysql_query($query);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<a href="productos_registrar.php" class="btn btn-primary">Registrar</a>
			<table class="table table-hover table-condensed">
				<thead>
					<tr>
						<th>id</th>
						<th>Código</th>
						<th>Producto</th>
						<th>Caracteristica</th>
						<th>Precio</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				<?php while($resultado = mysql_fetch_array($rows)){?>
					<tr>
						<td><?= $resultado['id_producto']?></td>
						<td><?= $resultado['codigo']?></td>
						<td><?= $resultado['nombre_producto']?></td>
						<td><?= $resultado['caracteristica']?></td>
						<td><?= $resultado['precio']?></td>
						<td>
						
						<a href="productos_eliminar.php?id_producto=<?= $resultado['id_prudcto'] ?>" class="btn btn-danger btn-xs"> eliminar</a>


							</td>

					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		
	</div>
	
</div>


   <?php include('includes/foot.php'); ?>