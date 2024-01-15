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
