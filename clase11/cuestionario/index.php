<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>

<h1>Cuestionario</h1>
<hr>

<form action="resultado.php" method="POST">
	
	<p>1. Quien ganó la primera vuelta</p>
	<ul>
		<li>Keiko <input type="radio" name="p1" value="5"></li>
		<li>Kuczynski <input type="radio" name="p1" value="0"></li>
		<li>Verónika <input type="radio" name="p1" value="0"></li>
		<li>Barnechea <input type="radio" name="p1" value="0">	</li>	
	</ul>

	<p>2. El voto fue electrónico?</p>
	<ul>
	<li>Solo electrónico 
		<input type="radio" name="p2" value="0"></li>
	<li>Solo a lapicero
		<input type="radio" name="p2" value="0"></li>
	<li>Ambos
		<input type="radio" name="p2" value="5"></li>
		
	</ul>

	<p>3. Que día fueron las elecciones?</p>
	<ul>
		<li>Domingo 10 de abril
			<input type="radio" name="p3" value="5">
		</li>
		<li>Lunes 11 de abril
			<input type="radio" name="p3" value="0">
		</li>
		<li>Martes 12 de abril
			<input type="radio" name="p3" value="0">
		</li>		
		
	</ul>

	<p>4. ¿ Cual es la entidad que verifica los resultados ?</p>
	<ul>
		<li>
			RENIEC
			<input type="radio" name="p4" value="0">
		</li>
		<li>
			ONPE
			<input type="radio" name="p4" value="5">
		</li>
		<li>
			JNE
			<input type="radio" name="p4" value="0">
		</li>
		<li>
			ONU
			<input type="radio" name="p4" value="0">
		</li>	
		
	</ul>

	<hr>
	<button type="submit">Enviar respuestas</button>

</form>


<br><br><br><br><br><br><br><br>
</body>
</html>