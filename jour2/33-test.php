<?php 

// http://192.168.15.15/33-test.php


$fleurs = [
    "nom" => "rose", // 0
    "prix" => 10 ,   // 1
    "enStock" => true ,
    "caracteristiques" => ["#00000" , "20"]
];

array_splice($fleurs , 1 , 1); // ok,
array_splice($fleurs , 0 , 0 , "bonjour");  // ajouter une clé indexé dans le tableau associatif
// array_splice($fleurs , "enStock" , 0 , "coucou");  // KO


var_dump($fleurs);