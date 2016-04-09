<?php

	$frutas = array('pera','manzana','limon','fresa');
	$edades = array(paul=>20,saul=>26,pedro=>36,maria=>14);

	//agregar un elemento al array $frutas
	$frutas[]="uva";
	$frutas[]="platano";

	

	//agregar un elemento al array asociativo $edades
	$edades['paco']=25;




	//previsualizando frutas
	echo "<pre>";
	print_r($frutas);
	echo "</pre>";

	//previsualizando edades
	echo "<pre>";
	print_r($edades);
	echo "</pre>";



?>