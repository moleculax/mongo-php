<!DOCTYPE html>
<html>
<head>
<title>Insertar Datos HW </title>
<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
</head>
<body>
<div class="bd-primary text-white"><h1>Conexión</h1></div>

<form action="insertConexion.php" method="POST" >

<div class="container text-primary">
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="idpc">Identificador PC </label>
<input type="text" name="idpc" class="form-control" placeholder="Identificador PC">
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="ip">IP </label>
<input type="text" name="ip" class="form-control" placeholder="IP">
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="mac">MAC Address</label>
<input type="text" name="mac" class="form-control" placeholder="MAC">
</div>
</div>

</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12">
<button type="insert" class="btn btn-primary">Registrar</button>
<button type="reset" class="btn btn-primary">Limpiar </button>
</div>
</div>
</div>
</form>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
