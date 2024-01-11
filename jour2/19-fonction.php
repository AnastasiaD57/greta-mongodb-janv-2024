<?php 

// http://192.168.15.15/19-fonction.php

// fonction permet de stocker des instructions 
// une variable qui contient des instructions 

// déclarer une fonction => stockage 
// créer une variable premier ET on vient de stocker dedans 3 instructions
function premier (){
    $a = 1 ;
    $b = 2 ;
    echo $a + $b ;
}
// dans premier vous stockez 3 instructions 
premier() ; // Warning: Undefined variable $premier
// return $a + $b;

//premier (); 