<!DOCTYPE html>
<html>
<head>
<title>Datos HW </title>
<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-primary bg-primary">
  <a class="navbar-brand text-white" href="index.php">Inicio</a>
</nav>
<div class="container">
<div class="row">
<div class="col-sm-12">

<?php 

 require 'vendor/autoload.php'; 
 $cn = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->dbname->BDequipos; 
    if($cn==true) {
    echo "<H5>:. TOTALIDAD DATOS INSERTADOS EN LA BD.:</H5><br>"; //porque no hubo excepciones
  }
  
  $client = new MongoDB\Client();
  $nom = $client->BDequipos->conexion;

   	$cursor = $nom->find();
	foreach($cursor as $doc) {
    echo 'IDPC: ' .$doc['idpc'];
    echo 'IP: ' .$doc['ip']; 
    echo 'MAC: ' .$doc['mac']; 
    echo"<br>";
  }


?>

</div>
</div>
</div>
</body>
</html>