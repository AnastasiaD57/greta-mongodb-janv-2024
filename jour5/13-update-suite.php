<?php 

$connexion = new PDO("mysql://host=localhost;dbname=demo;charset=utf8", "root", "demo");

if(!empty($_POST)){

    $id = htmlentities($_POST["id"]);
    $titre = htmlentities($_POST["titre"]);
    $like = htmlentities($_POST["nb_like"]);

    $sql = "
        UPDATE articles 
        SET title = '$titre' , nb_like = $like
        WHERE id = $id 
    ";

    $nbLigne = $connexion->exec($sql);

    if($nbLigne == 1){
        echo "l'article numéro $id a été mis à jour ! <br>" ; 
    }

}

$id = $_GET["id"];

$sql = "
    SELECT * 
    FROM articles 
    WHERE id = $id
";

$stmt = $connexion->query($sql);

$article = $stmt->fetch(PDO::FETCH_ASSOC);

// http://192.168.15.19/13-update-suite.php?id=2
?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $article["id"] ?>">
    <div>
        <label for="title">titre</label>
        <input type="text" name="titre" id="title" value="<?php echo $article["title"] ?>">
    </div>
    <div>
        <label for="like">like</label>
        <input type="number" name="nb_like" id="nb_like" value="<?php echo $article["nb_like"] ?>">
    </div>
    <input type="submit" value="modifier article">
</form>

