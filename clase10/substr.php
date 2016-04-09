<?php 

$url = "php.net/manual/es/function.substr.php";

	$dominio = substr($url,0,7);
	//echo $dominio;

	$idioma = substr($url,15,2);
	//echo $idioma;

	$extension = substr($url,-3,3);
	echo $extension;

 ?>