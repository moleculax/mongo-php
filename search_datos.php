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

<div class="container">
<div class="row">
<div class="col-sm-12">



<?php 
/* 
**www.moleculax.com.ve
**https://github.com/moleculax
*/
include("Form_search.php");

 require 'vendor/autoload.php'; 
 $cn = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->dbname->BDequipos; 
    if($cn==true) {
    echo "<hr>"; //porque no hubo excepciones
  }
  
  $client = new MongoDB\Client();
  $nom = $client->BDequipos->conexion;

    $curs = array("idpc" => $_POST["idpc"]);
  $cursor = $nom->find($curs);
  	 foreach($cursor as $doc) {
    echo"IDPC: ".  $doc['idpc']." ";
    echo"IP: ". $doc['ip']." "; 
    echo"MAC: ". $doc['mac']."<br>"; 
    echo"<br>";
  }
 
    

?>
</div>
</div>
</div>
</body>
</html>