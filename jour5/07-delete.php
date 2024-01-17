<?php 
// http://192.168.15.19/07-delete.php

$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root" , "demo");
// SELECT 
// $stmt = $connexion->query("SELECT "); 
// $resultat = $stmt->fetchAll()

// DELETE
// supprimer l'article dont l'id = 1 dans la table articles dans la base demo
// DELETE supprimer toutes les informations de la ligne 
// pour effectuer cette requete sql il faut uniquement une seule instruction ->exec()
// attention ce n'est pas réversible 
// cette méthode exec() retourne le nombre de ligne supprimée en la table  
$nbLigneAffectee =  $connexion->exec("DELETE FROM articles WHERE id = 1");

var_dump($nbLigneAffectee); // 1 la première fois puis 0 

// http://192.168.15.19/07-delete.php
// http://192.168.15.19/phpmyadmin 

// INSERT 

// UPDATE

// cas pratique créer le fichier 08-exo.php
// dans ce fichier vous allez vous connecter à la base de données demo
// une fois connecté vous allez supprimer l'article ayant l'id 120
// exécuter le script une fois pour constaté que l'article a bien été supprimé
// relancer le script une deuxieme fois et constatez que l'article n'existe plus
// reconfirmer en regarder phpmyadmin
