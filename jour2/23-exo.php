<?php 

// http://192.168.15.15/23-exo.php

$tableau = ["a" , 2 , true];

array_splice($tableau, 1 , 0 , "bonjour");

array_splice($tableau, 2 , 0 , "comment allez vous ?");

// 4 solutions 
//array_splice($tableau, 4, 1); 
//array_pop($tableau);
// array_splice($tableau, count($tableau) - 1, 1); 
array_splice($tableau, - 1, 1); 


//array_unshift($tableau , "first"); 
array_splice($tableau , 0 , 0 ,"first"); 


var_dump($tableau);

$t = ["a", "b", "c"];
//     0    1   2
//     -3   -2   -1
var_dump( count($t) - 1 ); // compter le nombre d'élément d'un tableau  (3)


array_splice($t , -1  , 1 ); 

var_dump($t); 
