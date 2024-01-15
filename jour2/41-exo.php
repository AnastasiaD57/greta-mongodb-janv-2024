<?php 

// http://192.168.15.15/41-exo.php

class Formation{
    public string $dateRentree; 
    public string $domaine ;
    public function __construct(string $date ,string $domaine )
    {
        $this->dateRentree = $date  ;
        $this->domaine     = $domaine ; 
    }
    public function synthese() : void{
        echo "je suis rentré en {$this->dateRentree} pour suivre une formation en {$this->domaine}";
    }
}
$f1 = new Formation("janvier 2023" , "Informatique");
$f1->synthese(); 
echo "<br>";
$f2 = new Formation("novembre 2023", "Boulangerie");
$f2->synthese(); 

// PHP .
$texte = "bonjour" . "  " . "les amis" ; 
$prix = 12.3 ; 

// utiliser PHP pour travailler avec une base de données => MySQL MariaDB 
// PHP met à disposition une class PDO

// https://www.php.net/
// https://www.php.net/manual/en/class.pdo
/* class PDO{
    public function __construct("", "", ""){

    }

    public function query(){

    }

    public function exec(){

    }

    public function prepare(){

    }
} */
