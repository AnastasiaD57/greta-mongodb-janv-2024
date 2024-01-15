<?php 
// http://192.168.15.15/37-exo.php

class Exo2{
    public array $etudiants = ["Alain", "Zorro"];
    public string $nomFormation = "DWWM" ;

    public function synthese() : void{
        foreach($this->etudiants as $key => $value){
            echo "{$value} suit une formation en {$this->nomFormation} <br>";
        }
    }
}
$exo2 = new Exo2();
$exo2->synthese() ; 

// 38-construct.php
