<?php 

// http://192.168.15.15/12-boolean.php

$a = true ;
$b = false ; 

// en général on va plutôt utiliser des comparaisons qui vont permettre d'obtenir des boolean

$c = 10 > 2 ; // true 

echo $c ."<br>"; // php ne va pas afficher à l'écran true mais le chiffre 1

// si on veut afficher le contenu d'une variable qui contient un boolean
// on utilise plutot la fonction var_dump() au lieu de echo 

var_dump($c) ; 
// /var/www/html/12-boolean.php:17:boolean true
// nom du fichier /var/www/html/12-boolean.php
// ligne 17
// type boolean
// valeur true 

$a = 10 ;
$b = 12 ; 

echo ($a + $b) ."<br>";  // 22 
echo "({$a} + {$b}) <br>";   // "10 + 12"

// pour les comparaisons vous retrouvez exactement les mêmes opérateurs de comparaison
// <
// >
// <=
// >=
// !=
// === strictement valeur et type
// !==

// &&
// || 
// ! 

$c = 10 > 11 && 12 !== "12" || 44 < 13 ; 
//    false  &&    true     ||   false
//          false           ||   false  
//                        false 

var_dump($c); 

// true && true => true
// false && true => false
// true && false => false
// false && false => false

// true || true => true
// false || true => true
// true || false => true
// false || false => false

// possible de remplacer && par AND
// possible de remplacer || par OR

$d = 10 > 2 AND 12 === 12 ; 
//     true AND    true
//      true 

var_dump($d);

$e = "12" === 12 ; 
//  permet de comparer la valeur et le type simultanément
var_dump($e); // false // boolean

$f = "12" == 12 ; 
var_dump($f) ; // true 

// créer le fichier 13-exo.php 
/*
expression
2 >= 2
"a" == "ab"
2 =! 3 && 10 < 33
"hello" > "bonjour" 
2 ==  "2"
2 === "2"
(2 != 5 && 3 > 4 ) || 2 <= 14 
2 != 5 && ( 3 > 4  || 2 <= 14 ) 
2 != 5 && 3 > 4  || 2 <= 14  
pour chaque expression dire si c'est true ou false => expliquer
*/


