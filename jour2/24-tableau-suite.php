<?php 

// http://192.168.15.15/24-tableau-suite.php

$premierTableau = []; 

$premierTableau["age"] = 10 ;
$premierTableau["adresse"] = "30 rue de Paris";
$premierTableau["isAdmin"] = true ;
$premierTableau["prix"] = 22.5 ; 

var_dump($premierTableau); 

$deuxiemeTableau = [
    // key => value
    "prix" => 200.5,
    "nom" => "Alain",
    "competences" => ["js", "php"]
];

// ajouter
$deuxiemeTableau["nouvelle"] = 500; 

// supprimer clé et sa valeur dans le tableau 
unset($deuxiemeTableau["nom"]);

// modifier une valeur existante
$deuxiemeTableau["prix"] = 300.5 ; 

var_dump($deuxiemeTableau); 