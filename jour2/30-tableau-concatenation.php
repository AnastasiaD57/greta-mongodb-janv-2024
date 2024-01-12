<?php 

// http://192.168.15.15/29-tableau-concatenation.php

$materiels = [
    "nom" => "Ordinateur portable",
    "prix" => 200 ,
    "unite" => "euros"
];

// afficher l'écran la phrase suivante 
// mon Ordinateur portable coûte 200 euros ; 

echo "mon " . $materiels["nom"] . " coûte " . $materiels["prix"] . " " . $materiels["unite"] ; 
echo "<br>"; 
echo "mon {$materiels["nom"]} coûte {$materiels["prix"]} {$materiels["unite"]}"; 
echo "<br>"; 
echo "mon $materiels[nom] coûte $materiels[prix] $materiels[unite]"; 

// autre tableau
$auteur = [
    "nom" => "Victor Hugo",
    "livre" => "Les Misérables" ,
    "annee" => 1800
];

// pouvez vous écrire dans le navigateur la phrase suivante 

// Victor Hugo a dit "j'ai écrit les Misérables" en 1800 
function firstLower( string $text) :string{
    return strtolower($text[0]) . substr($text, 1);
}
echo "<br>";
echo "$auteur[nom] a dit \"j'ai écrit $auteur[livre]\" en $auteur[annee] "; 

$image = [
    "url" => "https://source.unsplash.com/random", 
    "title" => "je suis un titre",
    "alt" => "image"
]; 

echo "<br>";

echo "<img src=\"$image[url]\" alt=\"$image[alt]\" title=\"$image[title]\"  style=\"width:200px\">";
// à partir de cette variable écrire dans la navigateur le texte suivant

// <img src="https://source.unsplash.com/random"  alt="image" title="je suis un titre" style="width:200px">


$formation = [
    "nom" => "DWWM",
    "duree" => 5,
    "unite" => "mois",
    "logo" => "https://source.unsplash.com/random", 
];

/*
<h2>DWWM</h2>
<p>la formation dure 5 mois</p>
<img src="https://source.unsplash.com/random" alt="">
*/ 