 <?php include('includes/header.php'); ?>
  <?php include('includes/botonera.php'); ?>
  <?php include('includes/conexion.php'); ?>


<?php 
	$query= "SELECT * FROM clientes";
	$rows= mysql_query($query);

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<a href="clientes_registrar.php" class="btn btn-primary">Registrar</a>
			<table class="table table-hover table-condensed">
				<thead>
					<tr>
						<th>id</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Telefono</th>
						<th>Direccion</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				<?php while($resultado =mysql_fetch_array($rows)){?>
					<tr>
						<td><?= $resultado['id_cliente']?></td>
						<td><?= $resultado['nombre']?></td>
						<td><?= $resultado['apellido']?></td>
						<td><?= $resultado['direccion']?></td>
						<td><?= $resultado['telefono']?></td>
						<td>
						<a class="btn btn-info btn-xs"
							href="clientes_detalle.php?id_cliente=<?= $resultado['id_cliente'] ?>" >info</a>
						<a href="clientes_eliminar.php?id_cliente=<?= $resultado['id_cliente'] ?>" class="btn btn-danger btn-xs"> eliminar</a>


							</td>

					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		
	</div>
	
</div>


   <?php include('includes/foot.php'); ?>