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
    if(file_exists("21-test.txt")){
        unlink("21-test.txt");
        echo "le fichier est bien supprimé <br>" ; 
    }
    else {
        echo "le fichier n'existe pas <br>" ; 
    }
}

$resultat = supprimerFichier(); 


function etudiant ( string $nom , int $age) : array {
    $etudiantDescription = []; 
    $etudiantDescription[] = $nom ; // ajouter la valeur  $nom
    $etudiantDescription[] = $age ;  // ajouter la valeur $age dans la tableau
    return $etudiantDescription ; 
}

// PHPDoc
/**
 * cette fonction permet de récupérer depuis la base de donnée un article
 *
 * @param integer $id chiffre supérieur à 0 
 * @return array  tableau qui contient titre / contenu / image
 */
function getArticle( int $id ) : array {
    return [
        "titre" => "article $id",
        "contenu" => "..." , 
        "img" => "..."
    ]; 
}

getArticle(1);


// cas pratique 
// créer le fichier 21-exo.php
// déclarer une fonction aireCercle 

// cette fonction dispose d'un argument $rayon type chiffre à virgule 

// cette fonction contient deux instructions :
// déclarer la variable $resultat = 3,14 * rayon * rayon
// afficher dans le navigateur la phrase suivante :
// l'aire d'un cercle de rayon $rayon a une aire de $resultat

// exécuter la fonction aireCercle pour le $rayon
// 44,5
// 70,43