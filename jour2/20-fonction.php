<?php 

// http://192.168.15.15/20-fonction.php

// dans la version 8 et supérieur de PHP 
// il est conseillé d'ajouter les types des arguments de nos fonctions

function deuxieme ( int $a , int $b ) : void {  
    echo $a + $b . "<br>";
    // echo n'est pas la même chose que return   
}
// procédure qui réalise des traitements sans retour


function troisieme ( int $a , int $b ) : string {
    return $a + $b . "<br>";
    // echo n'est pas la même chose que return   
}
// créer une fonction qui contient 2 paramètres qui doivent être 
// chiffres entier 
// cette fonctionne ne contient pas le mot clé return 
// : void (vide)

deuxieme(1,2);
$resultat = deuxieme(10,12);

$ici = troisieme(5,7);

// echo $resultat + 2 ; 

// deuxieme("bonjour", 22);  // permet détecter plus rapidement les erreurs

function supprimerFichier() :void{
    unlink("21-test.txt");
    echo "le fichier est bien supprimé <br>" ; 
}

//$resultat = supprimerFichier(); 