<?php 

// http://192.168.15.15/14-if.php

// if est un mot clé du langage PHP 
// il a un sens spécial pour le langage 
// dans les () du if vous allez avoir une comparaison

if( 10 > 2  ){
//  true alors PHP va exécuter le code écrit dans les accolades du if 
    echo "première condition <br>" ;
}

if( 10 < 2 ){
// false tout ce qui est écrit dans les accolades du if sont ignorés par PHP
    echo "deuxieme condition <br>" ;
}

if( 10 > 2 && 20 < 5  ){
    //   true  && false 
    //      false
    echo "troisième condition <br>" ;
}


$age = 18 ;

if($age < 18){
//  18 < 18
//  false => on ignore les instructions du if et on passe au else if suivant
    echo "vous êtes mineurs <br>"; 
}
else if($age < 80){ // PHP tu peux écrire elseif ou else if (avec espace)
    //  18   < 80
    //   true => exécuter les instructions du else if et PHP sort du bloc if
    // else est ignoré
    echo "vous êtes un adulte <br>" ;
} else {
    echo "vous êtes un retraité<br>";
}
// ici 

// attention je ne vais utiliser QUE if elseif else dans le cadre du cours 
// il existe un autre mot clé pour effectuer des conditions 

$distance = 30 ;
switch ( $distance ){
    case 10 : // $distance === 10 
              //   30      === 10
              //     false 
        echo "je vais rouler 10 min <br>";
        break ;
    case 20 :
        echo "je vais rouler 20 min <br>" ;
        break ;
    case 30 : // true 
        echo "je vais rouler 30 min <br>";
        break ;
    default :
        echo "je ne connais pas la durée <br>"; 
}

// cas pratique
// créer le fichier 15-exo.php contenant une variable $ville
// initialiser la variable $ville = "Marseille"

// si $ville a pour valeur Paris ==
// alors afficher dans le navigateur "vous habitez à Paris"

// si $ville a pour valeur Boulogne ou Clamart ou Montrouge 
// alors afficher dans le navigateur "vous habitez dans le 92"

// si $ville a pour valeur Saint-Denis ou Aubervilliers ou Pantin
//  alors afficher dans le navigateur "vous habitez dans le 93"

// sinon
// afficher dans le navigateur "vous habitez hors d'Ile de France"
