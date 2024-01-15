<?php 

// http://192.168.15.15/34-method.php

class Carre {
    public int $cote = 10 ; // propriété de la class
                            // variable de class 
    public function perimetre() :void  { // stocker une fonction dans la class
                                // perimetre est une méthode de la class Carre
        //dans les accolades d'une méthode
        // vous pouvez stocker des traitements 
        echo "je suis une méthode" ; 
    }
}
// une fois que la class est créée, si on veut exécuter la méthode perimetre 
$carre = new Carre();
$carre->perimetre(); // exécuter la méthode perimetre stockée dans l'objet $carre qui est définie dans la class Carre  

// cas pratique 
// créer le fichier 35-exo.php
// dans ce fichier vous allez créer une class qui s'appelle Etudiant
// cette class contient 2 méthodes

// getNom 
// cette méthode réalisé un echo du texte "je m'appelle Alain"

// getAdresse
// cette méthode return le texte suivant "75 rue de Paris";

// une fois la class créée, exécuter les deux méthodes est afficher leur résultat dans le navigateur

