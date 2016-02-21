<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
<br>

<div class="container">
	<div class="row">
    	<div class="col-md-8">
        <form class="form-inline" name="formulario" method="post" action="resultado2.php">
            <div class="form-group">
            <label>Productos</label>
                <select class="form-control" name="producto">
                    <option value="0">--selecciones un producto--</option>
                    <option value="1">Ventilador usb (para pc)</option>
                    <option value="2">Ventilador De pared</option>
                    <option value="3">Ventilador de oficina</option>
                    <option value="4">Ventilador industrial</option>	
                </select>
                </div>
                
                <div class="form-group">
                <input class="form-control"  name="cantidad" type="text">	
                </div>
                <div class="form-group">
                <input class="btn btn-primary" type="submit" value=" Enviar ">
            </div>	
            </form>
        </div>
    </div>
</div>




</body>
</html>