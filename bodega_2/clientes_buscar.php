 <?php include('includes/header.php'); ?>
  <?php include('includes/botonera.php'); ?>
  <?php include('includes/conexion.php'); ?>





<div class="container">	
	<div class="row">		
		<div class="col-md-12">
			<form action="" method="post">
				<input name="buscado" type="text" placeholder="Buscar a un cliente">
				<button type="submit">Buscar</button>		
			</form>

			
<?php

	if($_POST['buscado']){

		echo $_POST['buscado'];
	}

?>


		</div>
	</div>
</div>






   <?php include('includes/foot.php'); ?>