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
