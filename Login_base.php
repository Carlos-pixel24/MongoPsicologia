<?php

//guardar registros de login
require_once __DIR__ . '/vendor/autoload.php';

$usuario= $_POST["email"];
$pass= $_POST["pass"];

$collection = (new MongoDB\Client)->PSICOLOGIA->usuarios;

$insertOneResult = $collection->insertOne([
    'email' => $usuario,
    'password' => $pass,
    
]);

//header("Location:Login.php");
printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



var_dump($insertOneResult->getInsertedId());


?>