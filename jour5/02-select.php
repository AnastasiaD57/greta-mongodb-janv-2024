<?php 


// je veux récupérer l'ensemble des enresgistrements dans la base demo dans la table articles 
// nous allons utiliser PDO 

// https://www.php.net/manual/fr/class.pdo

// http://192.168.15.19/02-select.php
// 1 établir une connexion à la base données 
$dsn = "mysql://host=localhost;dbname=demo;charset=utf8";
$login = "root";
$password = "demo";

$connexion = new PDO($dsn , $login , $password); 

var_dump($connexion); 
// 2 effectuer une requête SQL => SELECT 
$stmt = $connexion->query("SELECT title , auteur FROM articles WHERE title LIKE '%q%' ORDER BY title ASC"); 

var_dump($stmt);
// 3 exécuter ma requete => tableau associatif 
$tableau = $stmt->fetchAll(PDO::FETCH_ASSOC); 

//var_dump($tableau); 

echo "<table>
    <tr>
        <th>titre</th>
        <th>auteur</th>
    </tr>
";
foreach($tableau as $key => $value){
    echo "
        <tr>
            <td>$value[title]</td>
            <td>$value[auteur]</td>
        </tr>
    ";
}
echo "</table>"; 