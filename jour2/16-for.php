<?php 

// http://192.168.15.15/16-for.php


// for mot clé de PHP
// il prend des () et des {}
// les () contiennent 3 instructions 
// $i= 0 ; // créer une variable 
// $i < 2 ; // comparaison => condition de sortie de la boucle
// $i++ ; $i = $i + 1 ; // $i augmente de + 1 et je stocke le resultat
                        // dans elle même 
                        // incrément 

for($i = 0 ; $i < 2 ; $i++ ){
    // $i = 0;
           // 0 < 2 
           // true => exécuter les instructions dans les { } du for
                    // $i = $i + 1 
                    // $i = 0 + 1
                    // 1
            // 1 < 2
            // true => exécuter les instructions dans les { } du for
                    // $i = $i + 1 
                    // $i = 1 + 1
                    // 2
            // 2 < 2
            // false> je sors des accolades du for
    echo "boucle<br>"; 
}
// ici

// créer le fichier 17-exo.php
// écrire une boucle php qui permet d'afficher dans votre navigateur le texte suivant

// 1 x 5 = 5
// 2 x 5 = 10
// 3 x 5 = 15
// 4 x 5 = 20
// 5 x 5 = 25
