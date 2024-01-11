<?php 

// http://192.168.15.15/13-exo.php

// 2 >= 2
// true
var_dump(2 >= 2); 

// "a" == "ab"
// false 
var_dump("a" == "ab");

// 2 != 3 && 10 < 33
// true  &&  true 
//    true 
var_dump(2 != 3 && 10 < 33); 


// "hello" > "bonjour" 
//  h => 68
//  b => 62 
// true
var_dump("hello" > "bonjour");

// 2 ==  "2"
// "2" == "2" // transtypage
// true
var_dump( 2 ==  "2");

// 2 === "2"
// false 
var_dump( 2 ===  "2");

// (2 != 5 && 3 > 4 ) || 2 <= 14 
// ( true  &&  false ) || true
//   false             ||  true
//         true
var_dump((2 != 5 && 3 > 4 ) || 2 <= 14 );

// 2 != 5 && ( 3 > 4  || 2 <= 14 ) 
// true   && (  false ||  true    )
// true   &&    true
// true 
var_dump( 2 != 5 && ( 3 > 4  || 2 <= 14 ) );

// 2 != 5 && 3 > 4  || 2 <= 14 
// true   &&  false || true 
//   false          || true
// true 
var_dump( 2 != 5 &&  3 > 4  || 2 <= 14  );