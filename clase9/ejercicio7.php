<?php 

$notas = array(
				Misael=>15,
				Raquel=>12,
				Monica=>19,
				Alonso=>6,
				Miguel=>17
				);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Nota</th>
		</tr>

<?php foreach($notas as $nombre=>$nota){ 

		echo "<tr><td>".$nombre."</td><td>".$nota."</td></tr>";

 } ?> 

	</table>
</body>
</html>
