
<?php
/*
http://moleculax.com.ve

*/

 require 'vendor/autoload.php'; 
 $cn = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->dbname->BDatos; 
 if($cn==true) {
  echo "RESULTADOS DE LA CONSULTA:<br>"; //porque no hubo excepciones
  }
  
  $client = new MongoDB\Client();
  $nom = $client->BDatos->datos;
  
  //datos a insertar
  $seedData = array(
    array(
        'ci' => '333', 
        'nombre' => 'DATO 01'
       
    ),
    array(
        'ci' => '1980', 
        'nombre' => 'DATO 02',
       
    ),
    array(
        'ci' => '1990', 
        'nombre' => 'DATO 03',
      
    ),
);
//inserta los datos
$nom->insertMany($seedData);

//actualiza datos
$nom->updateOne(
    array('ci' => '1980'), 
    array('$set' => array('nombre' => 'DATO ACTUALIZADO'))
);


//muestra en pantalla los datos

$cursor = $nom->find();
foreach($cursor as $doc) {
    echo 'Cedula: ' .$doc['ci'];
    echo ',Nombre: ' .$doc['nombre']; 
    echo"<br>";
}
    
 ?> 

