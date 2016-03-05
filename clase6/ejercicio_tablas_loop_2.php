<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

$nombres = array('hugo','Samir', 'Luis','Paco','Pedro','Alberto','Carlos','Raul');
$notas = array(12,17,15,03,19,05,16,12);

 ?>
 
 <table border="1">
 <tr>
 	<td>N°</td><td>Nombres</td><td>Notas</td> <td>Aprobado</td>
 </tr>
 <?php  
 //totales
 
 	$total_aprobados = 0;
	$total_desaprobados = 0;
	$suma_notas = 0; 
 ?> 
 <?php for($i=0; $i<count($nombres); $i++ ){ ?> 
 
 	 <? ($notas[$i]<11)?$fondo='bgcolor="#CC9999"':$fondo='' ?>  
     <tr <?= $fondo ?>>
        <td><?= $i+1 ?></td>
        <td><?= $nombres[$i] ?></td>
        <td><?= $notas[$i] ?></td>
        <td>    
            <?php //condicional
			if($notas[$i]>10){
				echo "si";
				$total_aprobados++;
			}else{
				echo "no";
				$total_desaprobados++;
			}
			?>      
        </td>
     </tr>
     
     <?php 
	 	//suma de notas
		$suma_notas	+= $notas[$i];
	 ?>
     
 
 <?php } ?>
 </table>
 
 <p>Total aprobados = <?= $total_aprobados ?></br>
Total desaprobados = <?= $total_desaprobados ?></br>
Total alumnos = <?= $total_alumnos = $total_aprobados + $total_desaprobados ?></p>	
<p>Promedio = <?= $suma_notas/$total_alumnos ?></p>
 

</body>
</html>