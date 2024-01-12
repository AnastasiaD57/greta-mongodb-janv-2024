<?php 

// http://192.168.15.15/32-poo.php

// en PHP il nous reste le dernier type de variable 
// les objets 
// pour créer des objets en PHP il faut au préalable 
// avoir créé une class

class Etudiant{ // créer une class on va mettre la 1ère lettre de la class en 
                // Majuscule => PascalCase
}
$etudiant = new Etudiant() ; 

var_dump($etudiant); // débugger mon objet $etudiant

// dans un objet (et une class) il va être possible de stocker à la fois des variables string / int /float /boolean / array/ objet
// variable 
// dans un objet (et dans une class) il est aussi possible de stocker des fonctions
// fonction 

class Fleur{
    public string $nom = "rose"; // propriété de class // variable de classe
    public int $prix = 22 ;
    public bool $isEnStock = true ; 
}
// créer une class qui s'appelle Fleur
// cette class contient 3 propriétés === variable de class 
$fleur = new Fleur();
var_dump($fleur); 
// écrire la phrase suivante 
// j'ai acheté une rose à 22 euros
// $nom_tableau[0]
// $nom_tableau["nom"]

echo "j'ai acheté une {$fleur->nom} à {$fleur->prix} euros <br>"; 
 

