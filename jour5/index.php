<?php 

try{
    $connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8mb4", "root", "demo");
    $connexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
  }
  catch(PDOException $e){
    echo "Impossible de se connecter à la base de données ".$e->getMessage();
    die();
  }



var_dump($connexion);