<?php 

// http://192.168.15.15/15-exo.php

$ville = "Marseille" ;

/* if($ville = "Paris"){ // vous ne mettre = au lieu de ==
    // $ville
    //"Paris"
    // true
    echo "vous habitez à Paris<br>" ; 
} */

if($ville == "Paris"){ //
    // "Marseille" == "Paris"
    // false
    echo "vous habitez à Paris <br>" ; 
}
elseif( $ville == "Boulogne" || $ville == "Clamart" || $ville == "Montrouge" ){
    echo "vous habitez dans le 92 <br>" ; 
}
elseif( $ville == "Saint-Denis" || $ville == "Aubervilliers" || $ville == "Pantin" ){
    echo "vous habitez dans le 93 <br>" ; 
}
else{
    echo "vous habitez hors d'Ile de France"; 
}

switch($ville){
    case "Paris" : 
        echo "vous habitez à Paris <br>" ; 
        break ;
    case "Boulogne":
    case "Clamart":
    case "Montrouge":
        echo "vous habitez dans le 92 <br>" ; 
        break ;
}