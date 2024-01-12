<?php 

// http://192.168.15.15/31-cas-complet.php

$vehicules = [
    [ 
       "nom" => "BMW",
       "prix" => 20000,
       "img" => "https://source.unsplash.com/random"
    ],
    [ 
        "nom" => "Peugeot",
        "prix" => 10000,
        "img" => "https://source.unsplash.com/random"
     ],
];

// écrire dans le navigateur le texte (qui contient du html suivant)
// <div>
// <h2>BMW</h2>
// <img src="https://source.unsplash.com/random" alt="" width="200">
// <p>prix : 20000 euros</h2>
// </div>
// <div>
// <h2>Peugeot</h2>
// <img src="https://source.unsplash.com/random" alt="" width="200">
// <p>prix : 10000 euros</h2>
// </div>