<?php 

// http://192.168.15.15/28-exo.php

$fleurs = ["jasmin" , "lilas" , "tulipes" , "rose"];

array_splice($fleurs, 3 , 0 , "geranium");

// première solution
foreach($fleurs as $key => $value){
    if( $key != count($fleurs) -1 ){
        echo $value . " - " ;
    }else {
        echo $value ; 
    }
}
echo "<br>"; 
// deuxième solution
for($i = 0 ; $i <= count($fleurs) - 1 ; $i++){
    if( $i != count($fleurs) -1 ){
        echo $fleurs[$i] . " - " ;
    }else {
        echo $fleurs[$i] ; 
    }
}

// PDO => PHP Data Object 