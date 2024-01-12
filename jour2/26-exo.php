<?php 

// http://192.168.15.15/26-exo.php

$etudiants = [
    [ "nom" => "alain" , "age" => 22 ] , 
    [ "nom" => "Zorro" , "age" => 44 ]
];


// question 1 : modifier l'age de Zorro => il doit avoir 34 ans
$etudiants[1]["age"] = 34 ;

// question 2 : ajouter à Alain la clé isAdmin qui a la valeur 
$etudiants[0]["isAdmin"] = true ; 

// question 3 : ajouter dans le tableau $etudiant un nouvel etudiant 
//             qui s'appelle Céline et qui a un age de 35
$etudiants[] = ["nom" => "Céline" , "age" => 35]; 

// question 4 : supprimer la propriété age pour l'étudiant alain
unset($etudiants[0]["age"]);

var_dump($etudiants);