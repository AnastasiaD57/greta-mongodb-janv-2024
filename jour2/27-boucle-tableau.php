<?php 

// http://192.168.15.15/27-boucle-tableau.php

$pays = ["france" , "allemagne", "espagne"] ; 
//           0                         2
// je veux afficher sur une même ligne les pays du tableau

for($i = 0 ; $i <= 2 ; $i++){
    if($i != 2){
        echo $pays[$i] . ", ";
    }else {
        echo $pays[$i] ;
    }
}

echo "<br>";

for($i = 0 ; $i <= count($pays) - 1  ; $i++){
    if($i != count($pays) - 1){
        echo $pays[$i] . ", ";
    }else {
        echo $pays[$i] ;
    }
}

echo "<br>";

// foreach va s'exécuter autant de fois qu'il y a de valeurs dans $pays 
// et lors de chaque exécution de foreach 
// 1ère exécution => $valeur = "france" et $key = 0
// 2eme exécution => $valeur = "allemagne" et $key = 1
// 3eme exécution => $valeur = "espagne"   et $key = 2
foreach($pays as $key => $value){ // parcours tous les éléments du tableau
    if($key != count($pays) - 1){
        echo $value . ", "; 
    }else {
        echo $value ; 
    }
}

// cas pratique
// créer le fichier 28-exo.php
// dans ce fichier vous avez un tableau qui contient les valeurs suivantes 
// jasmin / lilas / tulipes / rose

// ajouter entre tulipe et rose une nouvelle fleur de votre choix (geranium)

// parcourir le tableau et afficher les fleurs les unes après les autres sur la même ligne
// chaque fleur doit être séparée de l'autre avec le symbole -
// il ne faut pas avoir le symbole - pour la dernière fleur