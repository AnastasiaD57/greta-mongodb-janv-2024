<?php 

$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root", "demo");

if(!empty($_POST)){
    // $_POST => valeurs saisies dans le formulaire
    $id = htmlentities($_POST["id"]);
    $title = htmlentities($_POST["title"]);
    $categorie = htmlentities($_POST["categorie"]);
    $nb = htmlentities($_POST["nb_commentaires"]);

    $sql = "
        UPDATE articles 
        SET title = '$title' , categorie = '$categorie' , nb_commentaires = $nb
        WHERE id = $id
    ";

    $nbLignes = $connexion->exec($sql);

    if($nbLignes == 1 ){
        echo "l'article numéro $id vient d'être update <br>";
    }
}

$id = $_GET["id"];

$stmt = $connexion->query("SELECT * FROM articles WHERE id = $id");

$article = $stmt->fetch(PDO::FETCH_ASSOC);

// http://192.168.15.19/14-exo.php?id=2
?>

<form method="post">
    <input type="hidden" value="<?php echo $article["id"] ?>" name="id">
    <div>
        <label for="title">title</label>
        <input type="text" name="title" value="<?php echo $article["title"] ?>" id="title">
    </div>
    <div>
    <label for="categorie">categorie</label>
        <input type="text" name="categorie" value="<?php echo $article["categorie"] ?>" id="categorie">
    </div>
    <div>
    <label for="nb_commentaires">nom de commentaires</label>
        <input type="number" name="nb_commentaires" value="<?php echo $article["nb_commentaires"] ?>" id="nb_commentaires">
    </div>
    <input type="submit" value="modifier">
</form>

