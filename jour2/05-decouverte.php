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

// en PHP il est possible stocker dans une variable
// plusieurs type de valeurs

// string / chaine de caractères
$texte = "du texte" ; // guillemet
$texte = 'encore du texte' ; // apostrophes 
// `` backtick ne sont pas disponibles en PHP  

// vous pouvez stocker des chiffres dans des variables 
// en PHP on distingue chiffre entier => integer et les chiffres à virgule => float

$distance = 200 ; // int
$prix = 10.3 ;    // float
$prixVoiture = 10_000 ; // il est possible d'ajouter le symbole _ (underscore ) pour aérer votre chiffre 
// chiffre qui n'a aucun impact sur le valeur de 10000 

// boolean
$isAdmin = true ; 
$toto = false ; 

// attention il ne faut pas confondre 
$test1 = true ;
$test2 = "true" ;

$false = 0 ;  // false 
$vrai = 22 ; // true 

$autreTest = TRUE ;
$autreTest2 = True ; // je 

// variable simple = 1 variable contient 1 valeur 

// variable complexe => tableau (array) // objet 

// en js il n'existe 1 seul type de tableau
// const a = [ 1,2,3 ]; 

// en PHP il existe 2 types de tableaux 

// tableaux indexés 

$etudiants = ["Alain" , "Celine" , "Zorro" ]; 
$etudiants=["Alain","Celine","Zorro"]; 
$etudiants= [
        "Alain",  // 0
        "Celine", // 1
        "Zorro"   // 2
]; 
// chaque valeur stockée dans le tableau est accessible via sa position (index)
// exactement la même chose que sur le langage javascript 

// deuxième et dernier type de tableau tableaux associatifs 

$formation = [
    "duree" => 10 ,
    "prix"  => 5000 ,
    "adresse" => "75 rue de Paris",
    "isOpen" => false
    // key   => valeur
];
// le tableau formation contient 4 valeurs 
// spéciale PHP n'existe pas en javascript 


// en javascript et PHP il est possible de stocker dans une variable 
// des objets 
// const a = { prop : "valeur" };

// en PHP pour créer un objet il faut OBLIGATOIRE et AU PREALABLE avec crée une class 

class Etudiant {} // je crée une class

// et à ce moment là je peux créer un objet etudiant

$etudiant = new Etudiant(); 

echo "fin installation" ; 

// http://192.168.15.15/05-decouverte.php

?>

