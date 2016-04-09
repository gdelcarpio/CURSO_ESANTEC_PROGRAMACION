<?php 

	$edades = array('Rafael'=>25,
					  'Miguel Angel'=>36,
					  'Donatelo'=>15, 
					  'Leonardo'=>45, 
					  'Vincent'=>17,
					  'Salvador'=>26,
					  'Francisco'=>20,
					  'Pablo'=>13,
					  'Alberto'=>16,
					  'Frida'=>45,
					  'Tintoretto'=>30);
 ?>

 <table border="1">
 	<tr>
 		<th>Nombres</th>
 		<th>Edades</th>
 	</tr>
<?php 
	
	

	foreach($edades as $nombre=>$edad){ ?>
 	<tr>
 		<td><?= $nombre ?></td>
 		<td><?= $edad ?></td>
 	</tr>
<?php } ?>
 </table>

USANDO FOREACH
 //1. listar todos los datos en una tabla
 //2. Listar solo los mayores de edad (se usa condicional if)
 //3. Listar solo los menores de edad en orden alfabético (asort, ksort)
 //4. Listar todos pero las edades en orden creciente
 //5. Sumar todas las edades