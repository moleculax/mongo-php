<?php 

 require 'vendor/autoload.php'; 
 $cn = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->dbname->BDequipos; 
    if($cn==true) {
    echo "<H1>:. TOTALIDAD DATOS INSERTADOS EN LA BD.:</H1><br>"; //porque no hubo excepciones
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