<?php 
// démarrer votre machine virtuelle qui contient PHP
// cd jour2
// vagrant up
// une fois démarré vous pouvez fermer le terminal

echo "jour4 <br>" ;

// http://192.168.15.15/22-tableau.php

// si vous avez des fichiers qui contiennent 100% de PHP 
// pas besoin de mettre la balise fermante 

// 2 types de tableaux
// tableaux indexés

$fleurs = []; // tableau vide 

// ajouter une valeur au tableau vide
$fleurs[] = "Jasmin , fleur 2 , fleur 3"; // fleur.push("jasmin")
$fleurs[] = "Tulipes";
$fleurs[] = 30 ; 
$fleurs[] = 25.3 ; 
$fleurs[] = [ 1,2, 3 ] ; 

$fleurs[1] = $fleurs[1] . " Lilas, Jasmin ... " ;  
// attention si je veux débugger un tableau (afficher tout son contenu)

// echo $fleurs ; // Warning => Array to String => pas echo
var_dump($fleurs); // permet d'afficher le contenu du tableau 

$matieres = ["js , js v6 , js v7", "php" , "Angular" , "symfony" , "node"]; 

// la fonction native array_unshift permet d'ajouter une valeur au début du tableau 
array_unshift($matieres , "découverte PHP");
// ajouter le mot bonjour entre php et angular
array_splice($matieres , 3 , 0 , "bonjour");
// tableau à modifier $matieres
// où je veux me positionner 
// 0  => je ne veux pas supprimer élément / 2 => supprimer deux éléments à partir de la position 
//  "bonjour"

array_splice($matieres , 2 , 1) ; // supprimer le mot php 

var_dump($matieres);

// tableaux associatifs