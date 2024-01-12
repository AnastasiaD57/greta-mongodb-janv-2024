<?php 

// http://192.168.15.15/28-exo.php

$fleurs = ["jasmin" , "lilas" , "tulipes" , "rose"];

array_splice($fleurs, 3 , 0 , "geranium");

// première solution
foreach($fleurs as $key => $value){
    if( $key != count($fleurs) -1 ){
        echo $value . " - " ;
    }else {
        echo $value ; 
    }
}
echo "<br>"; 
// deuxième solution
for($i = 0 ; $i <= count($fleurs) - 1 ; $i++){
    if( $i != count($fleurs) -1 ){
        echo $fleurs[$i] . " - " ;
    }else {
        echo $fleurs[$i] ; 
    }
}

// PDO => PHP Data Object 

// créer le fichier 29-exo.php
// dans ce fichier vous allez créer un tableau multidimention

/*
articles qui est un tableau qui contient 3 valeurs
et chaque valeur de ce tableau est elle même un tableau

titre : "article 1" / contenu : "lorem ipsum 1" / img : https://via.placeholder.com/400x200
titre : "article 2" / contenu : "lorem ipsum 2" / img : https://via.placeholder.com/400x200
titre : "article 3" / contenu : "lorem ipsum 3" / img : https://via.placeholder.com/400x200

// via une boucle qui affiche à l'écran le texte suivant (texte qui contient du html)
<article>
    <h2>article 1</h2>
    <img src="https://via.placeholder.com/400x200" alt="">
    <p>lorem ipsum 1</p>
</article>
<article>
    <h2>article 2</h2>
    <img src="https://via.placeholder.com/400x200" alt="">
    <p>lorem ipsum 2</p>
</article>
<article>
    <h2>article 3</h2>
    <img src="https://via.placeholder.com/400x200" alt="">
    <p>lorem ipsum 3</p>
</article>
*/ 

