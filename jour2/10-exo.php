<?php 
// http://192.168.15.15/10-exo.php

$a = 12 ;
$b = 0 ;
$c = -2.5 ;

echo  $a / $c . "<br>"; // -4.8
echo  $a * $c + $a . "<br>"; //  -18 * + multiplication est prioritaire
echo  $a * ( $c + $a ) . "<br>"; 
// 114
// addition est prioritaire car on a des ( )
// puis la multiplication
echo  $a / $b . "<br>";
// erreur en PHP 
// javascript => Infinity
echo  $c / $b . "<br>";
// étant donné qu'il y a une erreur dans l'instruction précédente => le dernier echo ne s'affiche pas
// en production => rien qui s'affiche à l'écran
// modifier la configuration de PHP 
// dans un fichier php.ini 
// php => fonctionner d'une certaine manière 
