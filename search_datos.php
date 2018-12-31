<?php 
/* 
**www.moleculax.com.ve
**https://github.com/moleculax
*/
 require 'vendor/autoload.php'; 
 $cn = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->dbname->BDequipos; 
    if($cn==true) {
    echo ":.CONECT. DATOS SEARCH.:<br>"; //porque no hubo excepciones
  }
  
  $client = new MongoDB\Client();
  $nom = $client->BDequipos->conexion;

    $curs = array("idpc" => $_POST["idpc"]);
  $cursor = $nom->find($curs);
  	 foreach($cursor as $doc) {
    echo  $doc['idpc']."<br>";
    echo $doc['ip']."<br>"; 
    echo $doc['mac']."<br>"; 
    echo"<br>";
  }
 
    

?>
