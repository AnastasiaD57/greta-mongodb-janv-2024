<?php 
// http://192.168.15.19/05-exo.php?is_active=0&nb_commentaires=400
$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root", "demo");

$is_active = $_GET["is_active"]; // 0
$nb_commentaires = $_GET["nb_commentaires"]; // 400
                     // nb_commentaire via de l'url
// sans concaténation
$sql = "
    SELECT id , title , is_active , auteur , nb_commentaires 
    FROM articles 
    WHERE is_active = 1 AND nb_commentaires > 200
";
// avec concaténation 
$sql = "
    SELECT id , title , is_active , auteur , nb_commentaires 
    FROM articles 
    WHERE is_active = $is_active AND nb_commentaires > $nb_commentaires
";

$stmt = $connexion->query($sql);

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>is_active</th>
        <th>auteur</th>
        <th>nb commentaire</th>
    </tr>
";
foreach($articles as $key => $value){
    echo "
        <tr>
            <td>$value[id]</td>
            <td>$value[title]</td>
            <td>$value[is_active]</td>
            <td>$value[auteur]</td>
            <td>$value[nb_commentaires]</td>
        </tr>
    ";
}
echo "</table>"; 

// cas pratique créer le fichier 06-exo.php
// dans ce fichier vous allez réaliser connexion / query / fetchAll()
// récupérer depuis la table articles les colonnes suivantes 
// id / title / created_at / nb_like / categorie
// filtrer sur les deux critères suivants
// categorie = PHP
// et titre contient la lettre r LIKE %r%
// classé par ordre croissant created_at

// vous exécutez 

// une fois que votre affichage est opérationnel
// vous allez rendre la requête sql dynamique en utilisant des paramètres d'url à récupérer via $_GET (super globale)
// http://192.168.15.19/06-exo.php?categorie=css&titre=y&trier=title
