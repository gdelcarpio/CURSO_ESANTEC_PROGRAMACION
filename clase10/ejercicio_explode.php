<?php 

	$url = "https://www.youtube.com/watch?v=9jQJfdQlYUk&list=PL0AB6B296074221BE";

	$datos = explode('v=',$url);

// echo "<pre>";
//  	print_r($datos);
//  echo "</pre>";


	

	echo substr($datos[1],0,11);



 ?>