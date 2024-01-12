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