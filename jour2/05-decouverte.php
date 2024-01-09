<?php 
// dans le dossier jour2 créer un nouveau fichier 
// 05-decouverte.php 
// pas de majuscule / pas d'espace dans les noms de fichier .php
// mettre un - pour séparer les mots 

// lorsque l'on écrit du PHP 
// il faut mettre son code PHP dans des balises spéciales <?php
// ne pas mettre d'espace entre < et le ? 
// ne pas mettre d'espace entre ? et php 
// entre ces deux balises vous allez écrire exclusivement du PHP
// commentaire monologne
#  commentaire monoligne
/*
    commentaire multi
    ligne
*/
?>
<?php 
// comme pour le langage javascript
// php permet de créer des variables 
// en js 
// en  const nom = "hello"
// en let nom = "valeur"

$nom = "Bonjour" ; // le ; à la fin de la création de la variable 
                   // est OBLIGATOIRE 

$nom="hello"; // les espaces autre du = et avant le ; sont facultatifs ils permettent d'aérer votre code 

// echo mot clé du language PHP qui permet d'afficher dans le navigateur le contenu d'une variable 
echo $nom ; // console.log()

// pour exécuter ton script PHP 
// => appeler le serveur 
// http://192.168.15.15/05-decouverte.php

?>

