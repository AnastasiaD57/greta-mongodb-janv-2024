<?php 

// http://192.168.15.15/39-exo.php

class Exo3{
    public int $distance = 200 ; 
    // typage => typehint 
    // https://www.php.net/manual/en/language.types.declarations.php
    public function __construct() 
    {
        echo $this->distance ; 
        // attention la fonction constructrice ne peut pas contenir de mot clé  
    }
    public function calcul() :int {
        return $this->distance * 30 ; 
    }
}
$exo3 = new Exo3();
// $exo3->__construct(); 
echo "<br>" . $exo3->calcul(); 

// 40-construct.php
