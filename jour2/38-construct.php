<?php 

// http://192.168.15.15/38-construct.php

class Vehicule{
    public function __construct() 
    // __ underscore sans espace suivi de construct
    // extension à installer 
    // veuillez bien respecter le nom de la fonction 
    // méthode magique => fonction MAIS elle a en plus des traitements en + qu'une méthode de base 
    // tout le code que vous allez écrire dans les accolades de la méthode magique __construct est exécuté automatiquement lors que l'on fait un new Vehicule
    {
        echo "je suis la fonction constructrice" ; 
    }
    public function toto(){
        echo "je suis un test"; 
    }
   // public function __construct(){}
}
$v = new Vehicule(); // créer l'objet $v ET exécuter la méthode __construct()
var_dump($v); 
$v->toto();  // cette méthode est une méthode de base, il faut l'appeler pour l'exécuter (elle n'est pas appelée automatiquement comme le __construct()) 

// cas pratique 
// créer un nouveau fichier 39-exo.php

// ce fichier contient une class qui s'appelle Exo3 
// cette class contient 
// une propriété distance qui contient la valeur 200;
// une méthode constructrice qui va faire un echo de la propriété distance
// une méthode (de base) calcul qui va retourner le calcul la distance * 30 ; 

// créer un objet à partir de la class
// vérifier que la méthode constructrice est exécutée automatiquement
// puis exécutez la méthode calcul