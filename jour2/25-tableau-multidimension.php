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

// créer le fichier 26-exo.php
// tableau $etudiants qui contient les 2 valeurs suivantes (ce sont des tableaux)
// [ nom : "alain" , age : 22 ]
// [ nom : "Zorro" , age : 44 ]

// question 1 : modifier l'age de Zorro => il doit avoir 34 ans
// question 2 : ajouter à Alain la clé isAdmin qui a la valeur true
// question 3 : ajouter dans le tableau $etudiant un nouvel etudiant 
//             qui s'appelle Céline et qui a un age de 35
// question 4 : supprimer la produit age pour l'étudiant alain
