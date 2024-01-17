<?php 
// http://192.168.15.19/06-exo-v2.php?categorie=css&titre=y&trier=title

$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root" , "demo");

$categorie = $_GET["categorie"];
$titre = $_GET["titre"];
$trier = $_GET["trier"];

$sql = "
SELECT id , title , created_at , nb_like , categorie
FROM articles 
WHERE categorie = '$categorie' AND title LIKE '%$titre%'
ORDER BY $trier ASC  
";

$stmt = $connexion->query($sql);

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>created_at</th>
        <th>nb_like</th>
        <th>categorie</th>
    </tr>
";
foreach($articles as $key => $value){
    echo "
        <tr>
            <td>$value[id]</td>
            <td>$value[title]</td>
            <td>$value[created_at]</td>
            <td>$value[nb_like]</td>
            <td>$value[categorie]</td>
        </tr>
    ";
}
echo "</table>"; 