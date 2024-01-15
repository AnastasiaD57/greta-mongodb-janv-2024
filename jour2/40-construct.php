<?php 

// http://192.168.15.15/40-construct.php

class Fleur{
    public string $nom = "rose";
}

/* 
    $fleur = new Fleur(); 
    var_dump($fleur);
    $fleur2 = new Fleur(); 
    var_dump($fleur2); 
*/

// donner l'attribuer une valeur différente entre chaque objet 
class Fleur2{
    public string $nom ; // créer une propriété SANS valeur
    public string $nom1 ;
    public string $nom2 ;
    public function __construct( string $nom_fleur , string $nom_2 , string $nom_3 )
    {
        // lors de l'exécution __construct est exécuté
        // permet de donner la valeur à la propriété $this->nom 
        $this->nom = $nom_fleur; 
        $this->nom1 = $nom_2; 
        $this->nom2 = $nom_3; 
    }
}
$fleur3 = new Fleur2("Tulipe" , "nom 1" , "nom 2" );
var_dump($fleur3); 
$fleur4 = new Fleur2("Lilas" , "nom 3" , "nom 4"); 
var_dump($fleur4); 

// cas pratique 
// créer le fichier 41-exo.php
// dans ce fichier vous allez créer un class Formation
// cette class contient deux propriétés
// dateRentree type string (on laisse au construction l'action de lui donner la valeur)
// domaine type string (on laisse au construction l'action de lui donner la valeur)
// créer un constructeur qui contient 2 paramètres $date , $domaine tous les deux de type string
// dans les constructeurs vous allez initialiser les propriétés dateRentree et domaine
// créer une dernier méthode (classique) synthese
// cette méthode echo le texte suivant je suis rentré en $this->dateRentree pour suivre une formation en $this->domaine

// une fois class créée => // créer un objet formation1 avec comme date "janvier 2023" "Informatique"
// exécuter la méthode synthese de cet objet
// une fois class créée => // créer un objet formation2 avec comme date "novembre 2023" "Boulangerie"
// exécuter la méthode synthese de cet objet