<?php
/*
http://moleculax.com.ve
*/

 require 'vendor/autoload.php'; 
 $cn = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->dbname->BDequipos; 
    if($cn==true) {
    echo ":.CONECT. DATOS INSERT.:<br>"; //porque no hubo excepciones
  }
  
  $client = new MongoDB\Client();
  $nom = $client->BDequipos->conexion;
  
      if($_POST) {
      //datos a insertar
       $seedData = array(
        array(
        'idpc' => $_POST['idpc'], 
        'ip' => $_POST['ip'],
        'mac'=>$_POST['mac']
       
    ),
 
);
//inserta los datos
    if ($nom->insertMany($seedData)){

       echo"Datos Insertados correctamente";
}
    else { echo"Fallo en inserción de datos.";}
}

    else {

      echo"No inserto los datos.";
}
?>