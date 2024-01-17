<?php 
// http://192.168.15.19/08-exo.php
$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root" , "demo");

$id = 120 ;

$nbLigneAffectees = $connexion->exec("DELETE FROM articles WHERE id = $id");

if( $nbLigneAffectees > 0 ){
    echo "vous avez supprimé l'article $id"; 
} else {
    echo "aucun article ayant l'id $id n'existe"; 
}