<?php 
 // ici du php 
 // http://192.168.15.19/11-exo.php
 if(!empty($_POST)){
    // si le formulaire est soumis
    // alors on veut ajouter les données dans la table 
    // articles 
    $connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root", "demo");

    $erreurs = [];
    
    $titre = $_POST["titre"];
    $categorie = $_POST["categorie"];
    $auteur = $_POST["auteur"];

    if(strlen($titre) < 3){
        $erreurs[] = "le titre doit contenir au moins 3 lettres"; 
    }

    if(strlen($categorie) < 3){
        $erreurs[] = "la categorie doit contenir au moins 3 lettres"; 
    }

    if(strlen($auteur) < 3){
        $erreurs[] = "la auteur doit contenir au moins 3 lettres"; 
    }

   
        // récupérer la liste des champs de la table articles 
        // je vérifie lesquels sont NOT NULL 
        // http://192.168.15.19/phpmyadmin > connecte > demo > article > onglet structure 
            // attention lorsque vous réalisez un INSERT => ne pas ajouter la colonne id (clé primaire) car c'est la bdd qui va le déterminer 
        // via la propriété AUTO_INCREMENT
        if(count($erreurs) == 0){
            $sql = "
            INSERT INTO articles 
            (title , content, categorie , auteur, created_at, updated_at, nb_commentaires , nb_like)
            VALUES
            ('$titre' , '' , '$categorie', '$auteur' , NOW() , NOW() , 0, 0);
        ";

            $nbLigne = $connexion->exec($sql);
            if($nbLigne == 1){
                echo "vous avez ajouté une ligne dans la table articles <br>";
            }else {
                echo "erreur lors de l'insertion dans la base de données <br>";
            }
        } else {
            foreach($erreurs as $key => $value){
                echo "$value <br>";
            }
        }
 }
?>

<form method="post">
    <div>
        <label for="auteur">auteur</label>
        <input type="text" name="auteur" id="auteur" minlength="3" required>
    </div>
    <div>
        <label for="categorie"> categorie</label>
        <input type="text" name="categorie" id="categorie" minlength="3" required>
    </div>
    <div>
        <label for="titre">titre</label>
        <input type="text" name="titre" id="titre" minlength="3" required>
    </div>
    <input type="submit" value="ajouter une nouvelle ligne dans la table">
</form>