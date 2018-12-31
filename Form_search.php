<!DOCTYPE html>
<html>
<head>
<title>Busqueda Datos IDPC </title>
<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<h1>Registrar equipo.</h1><br>
	<?php include("Form_insertConex.php"); ?>
  <h1>Intro. IDPC Identificador.</h1>

  <div class="container">
  	
  	<div class="row">
  		<div class="col-sm12">
  			
  
<form action="search_datos.php" method="POST" >
<input type="text" name="idpc" class="form-control" placeholder="Identificador PC">
<button type="insert" class="btn btn-primary">Buscar</button>
  </form>

  		</div>
  	</div
  </div>
</body>
</html>