<?php 
	$frutas = array('pera','manzana','limon','fresa');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

	<ul>
		 <?php 
		 		foreach($frutas as $fruta){
		 			echo "<li>".$fruta."</li>";
		 		}
		  ?>
 	</ul>
 </body>
 </html>