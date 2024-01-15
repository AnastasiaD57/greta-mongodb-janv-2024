<?php 

// http://192.168.15.15/36-this.php

class Carre {
    public int $cote = 10 ;
    public function perimetre () :int {
        // si je veux accéder à la propriété coté DANS la class
        // $this->cote ; // permet d'accéder à une propriété DANS la classe // 10 
        return $this->cote * 4 ; 
    }
    public function aire() : int{
        return $this->cote * $this->cote ; 
    }
}
// accéder à côté hors de la classe 
$carre = new Carre();
echo $carre->cote . "<br>"; 
echo $carre->perimetre() . "<br>";
echo $carre->aire() ; 


// créer le fichier 37-exo.php 

// ce fichier contient une class Exo2 
// cette class contient 2 propriétés
// tableau d'étudiants = ["Alain", "Zorro"]
// nomFormation = "DWWM"
// cette class contient une méthode synthese
// cette méthode contient les opérations suivantes
// boucle foreach qui va parcourir tous les étudiants stockés dans la propriété etudiants
// pour chaque étudiant elle va faire un  echo Alain suit une formation en DWWM
//                                   puis echo Zorro suit une formation en DWWM

// une fois la class créée exécuter la méthode synthese 
