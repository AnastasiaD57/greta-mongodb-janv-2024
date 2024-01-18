<?php 

// 1ère étape 
// => récupérer un article existant
// SELECT 
// remplir le formulaire avec les données de l'article existant 
// dans le formulaire il va y avoir un champ id caché 

// 2ème modifier mes valeurs 

// 3ème et dernières étapes => soumet le formulaire 

// verifier que le formulaire n'est pas vide 
// récupérer les nouvelles valeurs saisies *
// effectuer un UPDATE 

$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root", "demo");

if(!empty($_POST)){

    // pas besoin de redemander une connexion c'est déjà disponible

    // ' =>  &#039;

    // htmlentities () ajouter \ devant les apostrophes
    $titre = htmlentities($_POST["titre"]);
    $contenu = htmlentities($_POST["contenu"]);
    $id = $_POST["id"];

    $sql = "
        UPDATE articles
        SET title = '$titre' , content = '$contenu' 
        WHERE id = $id ;
    ";
    

    $nbLigne = $connexion->exec($sql);
    if($nbLigne == 1){
        echo "article mis à jour <br>";
    }
}

$id = $_GET["id"]; // quel article ??? 

$stmt = $connexion->query("SELECT * FROM articles WHERE id = $id"); 

$article = $stmt->fetch(PDO::FETCH_ASSOC); // une ligne

var_dump($article); // http://192.168.15.19/12-update.php?id=1

?>

<form method="post">
    <input type="hidden" value="<?php echo $article["id"] ?>" name="id">
    <div>
        <label for="titre">titre</label>
        <input type="text" name="titre" value="<?php echo $article["title"] ?>">
    </div>
    <div>
        <label for="contenu">contenu</label> <br>
        <textarea name="contenu" id="contenu" cols="30" rows="10"><?php echo $article["content"] ?></textarea>
    </div>
    <input type="submit" value="modifier l'article">
</form>
