<?php 

// http://192.168.15.15/25-tableau-multidimension.php


// liste de produits 3 
// chaque produit va avoir 2 caractéristiques 
// nom 
// prix 
// tableau de 3 elements où chaque élément est un tableau de 2 propriétés
// tableau multidimensionnel

$produits = [
    [
        "nom" => "Voiture",
        "prix" => 10000
    ],
    [  // 1
        "nom" => "fleur", // nom
        "prix" => 20.5
    ],
    [
        "nom" => "banane",
        "prix" => 2 
    ]
];

// modifier la valeur fleur par la valeur lilas
$produits[1]["nom"] = "lilas"; 

// ajouter dans le tableau qui contient le nom banane
// la clé enStock qui a la valeur  true 

// $produits[2]["enStock"] = true ; 
$produits[count($produits) - 1]["enStock"] = true ; 

// pour le 1er élément du tableau supprimer la clé nom et sa valeur
unset($produits[0]["nom"]);

/* const produits = [
    {
        nom : "voiture",
        prix : 10000
    },
    {
        nom : "fleur",
        prix : 10
    }
]

produits[1].nom = "lilas"
*/

var_dump($produits);