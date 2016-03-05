<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

  

<?php  
$meses = array('Enero','Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre');
?>

<table border="1">
  <tr>
    <td>N°</td>
    <td>Mes</td>
    <td>Año</td>
  </tr>
  
<?php for($i=0; $i<count($meses); $i++){  ?>  
  <tr>
    <td><?= $i+1 ?></td>
    <td><?= $meses[$i] ?></td>
    <td>2016</td>
  </tr>
 <?php } ?> 
 
 
</table>
</body>
</html>