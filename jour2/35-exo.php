<?php 
// http://192.168.15.15/35-exo.php
class Etudiant{
    public function getNom() :void{
        echo "je m'appelle Alain" ; 
    }
    public function getAdresse() : string {
        return "75 rue de Paris";
    }
}
$etudiant = new Etudiant();
$etudiant->getNom() ;
echo "<br>"; 
echo $etudiant->getAdresse(); 

// $this
// 36-this.php