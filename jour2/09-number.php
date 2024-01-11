<?php 
// http://192.168.15.15/09-number.php

$a = 1 ;
$b = 2 ; 

// addition / soustraction / division / multiplication
echo $a + $b . "<br>"; // addition
echo $a - $b . "<br>"; // soustraction
echo $a / $b . "<br>"; // division
echo $a * $b . "<br>"; // multiplication

// puissance / modulo
$c = 3 ;
$d = 4 ;
echo $c ** $d . "<br>" ; //puissance
echo $d % $b . "<br>" ; // modulo => reste entier d'une division
echo $c % $b . "<br>"; // modulo => reste entier d'une division

// 4 / 2 => 2 reste entier 0
// 3 / 2 => 1 reste entier 1

// spécial PHP 
echo "1" + 2 . "<br>"; // PHP si on veut additionner un "chiffre" + chiffre 
                        // PHP va modifier le type de "1" => 1 
                        // et il va faire l'addition
                        // attention en js "1" + 2 => "12"
echo "20 euros" + "12 dollars". "<br>";  // 32
echo "euros 20" + 12 . "<br>";  // erreur // pas d'affichage d'erreur

// cas pratique 

/* créer un nouveau fichier 10-exo.php
Cette page contient 3 variables :
    $a ayant la valeur 12
    $b ayant la valeur 0
    $c ayant la valeur -2,5
effectuer les calculs suivants et afficher leurs résultats dans le navigateur
    $a / $c
    $a * $c + $a
    $a * ( $c + $a )
    $a / $b
    $c / $b */
