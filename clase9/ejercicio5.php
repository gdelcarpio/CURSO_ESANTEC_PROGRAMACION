<?php 
	$frutas = array('pera','manzana','limon','fresa');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

	<table border="1">
		 <?php 
		 		foreach($frutas as $fruta){
		 			echo "<tr><td>".$fruta."</td></tr>";
		 		}
		  ?>
 	</table>
 </body>
 </html>