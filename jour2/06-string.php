<?php 

// créer dans le dossier jour2
// un nouveau fichier 06-string.php 

echo "06-string.php" ; 

echo "<br>ligne suivante" ; 
// dans un fichier .php vous pouvez écrire du html 
// le html que vous écrivez est considéré
// comme une string

$prenom = "Victor" ;
$nom = "Hugo" ;
$auteurFr = $prenom . " " . $nom ; 
// concaténation en PHP il faut utiliser 
// l'opérateur .  
echo "<br>" . $auteurFr ;
echo "<br>" . $prenom . " " . $nom ; 
echo "<br> $prenom du texte entre  $nom" ; 
echo "<br> {$prenom} du texte entre {$nom}" ; 

$matiere = "javascript" ;
$niveau = "expert";
// par contre si vous utilisez le symbole ' apostrophe
// la concaténation ne fonctionne pas dans les 2 derniers cas 
echo '<br>' . $matiere . ' ' . $niveau ; // ok
echo '<br> $matiere $niveau'; // juste affiche nom des variables
echo '<br> {$matiere} {$niveau}'; // juste affiche nom des variables

// http://192.168.15.15/06-string.php 

// Heredoc
$paragraphe = <<<END
<br>
bonjour les amis <br>
comment allez vous <br>
je vais bien merci 
END ; 

echo $paragraphe ; 

// cas pratique
// créer le fichier 07-exo.php
// dans ce fichier créer 3 variables 
// unite : euros
// montant : 30
// objet : "un dejeuner au restaurant"

// écrire dans le navigateur web les phrases suivantes 
// j'ai dépensé 30 euros
// mon déjeuner au restaurant est prévu à 11h30 

?>