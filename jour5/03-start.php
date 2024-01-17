<?php 

// http://192.168.15.19/03-start.php
// 1 accéder à la base de données 
$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8","root", "demo");

// var_dump($connexion);

// 2 demande en format SQL 
$sql = "
SELECT id, title , categorie , nb_like
FROM articles
WHERE nb_like > 200 
ORDER BY title ASC
";

$stmt = $connexion->query($sql);

// var_dump($stmt); 

// 3 exécute la requête => $tableau associatif

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 4 parcourir avec un foreach()
echo "
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>categorie</th>
        <th>nb like</th>
    </tr>
";
foreach($articles as $key => $value){
    echo "
        <tr>
            <td>$value[id]</td>
            <td>$value[title]</td>
            <td>$value[categorie]</td>
            <td>$value[nb_like]</td>
        </tr>
    ";
}
echo "</table>"; 