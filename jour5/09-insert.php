<?php 
// http://192.168.15.19/09-insert.php
// SELECT + $_GET 

if(!empty($_POST)){ // si la super globale $_POST n'est pas vide 

    $connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root" , "demo");
    $titre = $_POST["title"];
    $contenu = $_POST["contenu"];

    $sql = "INSERT INTO articles 
        (title , content, categorie , auteur , created_at , updated_at , nb_commentaires , nb_like) VALUES 
        ('$titre','$contenu' , '' , '' , NOW() , NOW() , 0 , 0)" ; 

    $connexion->exec( $sql); 
}

// INSERT => laisser la main à l'utilisateur pour saisir des informations 
// title => bonjour
// contenu =>  je vais bien 
?>
<!-- $_POST autre super globale
    permet de récupérer des informations saisies dans un formulaire et les envoyer au serveur => php $_POST => concaténer dans SQL => exécuté => dans base de données 
-->
<form method="post"> <!-- dans la balise form vous pouvez ajouter une attribut action, vu qu'il est absent => le fichier .php qui s'appelle lui même  -->
    <div>
        <label for="title">titre</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="contenu">contenu</label> <br>
        <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="créer nouvel article">
</form>
<!-- pour que les données saisies dans le formulaire soient envoyées au serveur via $_POST il faut OBLIGATOIREMENT ajouter l'attribut name="" pour le input et le textarea -->

