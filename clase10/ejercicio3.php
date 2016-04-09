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

	ksort($edades);
	
	foreach($edades as $nombre=>$edad){ ?>

	<?php if($edad < 18){ ?>
	 	<tr>
	 		<td><?= $nombre ?></td>
	 		<td><?= $edad ?></td>
	 	</tr>
	 <?php } ?>	

<?php } ?>
 </table>