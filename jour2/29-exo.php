<?php 

// http://192.168.15.15/29-exo.php

$articles = [
    [
        "titre" => "article 1" , 
        "contenu" => "lorem ipsum 1" , 
        "img" => "https://via.placeholder.com/400x200"
    ],
    [
        "titre" => "article 2" , 
        "contenu" => "lorem ipsum 2" , 
        "img" => "https://via.placeholder.com/400x200"
    ],
    [
        "titre" => "article 3" , 
        "contenu" => "lorem ipsum 3" , 
        "img" => "https://via.placeholder.com/400x200"
    ]
];

foreach($articles as $key => $value){
    echo "
        <article>
            <h2>{$value["titre"]}</h2>
            <img src=\"{$value["img"]}\" alt=\"\">
            <p>{$value["contenu"]}</p>
        </article>
    ";
}