<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	
	<select name="pais">
			<option> - SELECCIONES UN PAIS - </option>
			<option value="peru">Peru</option>
			<option value="colombia">Colombia</option>
			<option value="mexico">Mexico</option>
			<option value="ecuador">Ecuador</option>
	</select>
	<button type="submit">Enviar</button>

<?php 
		if($_POST['pais']){
			$pais = $_POST['pais'];

			if($pais=='peru'){
				echo "<h1>Usted es Peruano</h1>";
			}else if($pais=='colombia'){
				echo "<h1>usted es Colombiano</h1>";
			}else if($pais=='mexico'){
				echo "<h1>usted es Mexicano</h1>";
			}else if($pais=='ecuador'){
				echo "<h1>usted es Ecuatoriano</h1>";
			}


		}
		


 ?>


</form>

</body>
</html>