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

	for($i=0; $i<20; $i++){
		echo $i*10;
		echo "<br>";
	}












	if($_POST['buscado']=20){
		
		$query = "SELECT * FROM clientes 
				  WHERE nombre LIKE '%".$_POST['buscado']."%' "; 

	    $row = mysql_query($query);

	    while($resultado = mysql_fetch_array($row)){
	    	echo $resultado['nombre'].' '.$resultado['apellido'];
	    	echo "<br>";
	    

	}



?>




		</div>
	</div>
</div>






   <?php include('includes/foot.php'); ?>