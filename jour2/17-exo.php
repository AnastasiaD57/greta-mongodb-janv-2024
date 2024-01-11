<?php 
// http://192.168.15.15/17-exo.php

// 1 x 5 = 5 minimum 1
// 2 x 5 = 10
// 3 x 5 = 15
// 4 x 5 = 20
// 5 x 5 = 25 maximum 5  $i <= 5 ou $i < 6
//            augmentation c'est + 1 à chaque tour de boucle 

for( $i = 1 ; $i <= 5 ; $i++  ){
    echo "$i x 5 = " . $i * 5 . "<br>";
}