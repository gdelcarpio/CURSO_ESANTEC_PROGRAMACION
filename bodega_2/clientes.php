 <?php include('includes/header.php'); ?>
  <?php include('includes/botonera.php'); ?>

    <div class="container">

    	<form method="post" action="clientes_insertar.php">

		  <div class="form-group">
		    <label>Nombres</label>
		    <input name="nombre" type="text" class="form-control" placeholder="Colocar nombres completos">
		  </div>

		  <div class="form-group">
		  	<label>Apellidos</label>
		  	<input name="apellido" type="text" class="form-control" placeholder="Colocar apellidos completos">
		  </div>

		  <div class="form-group">
		  	<label>Teléfono</label>
	  		<input name="telefono" type="text" class="form-control" placeholder="Colocar teléfono">
		  </div>

		  <div class="form-group">
		  	<label>Dirección</label>
		  	<textarea name="direccion" class="form-control" rows="3"></textarea>
		  </div>	

		  <button type="submit" class="btn btn-primary">Registrar Cliente</button>

		</form>

    </div> <!-- fin de container -->

    <?php include('includes/foot.php'); ?>