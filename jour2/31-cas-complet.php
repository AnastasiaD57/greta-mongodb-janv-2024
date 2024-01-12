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

foreach($vehicules as $key => $value){
    echo "<div>
    <h2>$value[nom]</h2> 
    <img src=\"$value[img]\" alt=\"\" width=\"200\">           
    <p>prix : $value[prix] euros</h2> 
    </div>";
}

// écrire dans le navigateur le texte (qui contient du html suivant)
// <div>
// <h2>BMW</h2> $vehicule[0]["nom"]
// <img src="https://source.unsplash.com/random" alt="" width="200"> 
//                   $vehicule[0]["img"]            
// <p>prix : 20000 euros</h2> $vehicule[0]["prix"]
// </div>
// <div>
// <h2>Peugeot</h2> $vehicule[1]["nom"]
// <img src="https://source.unsplash.com/random" alt="" width="200">
//                   $vehicule[1]["img"] 
// <p>prix : 10000 euros</h2> $vehicule[1]["prix"]
// </div>