<?php 

$prenom =  "Alain" ;
$nom  =  "Doe" ;
$age =  44 ;
$competences= "PHP" ;

// Alain a 44 ans
echo "<strong>$prenom</strong> a $age ans<br>";

// le PHP est un langage maitrisé par Alain
echo "le $competences est un langage maitrisé par $prenom<br>";

// Alain Doe découvre PHP
echo "$prenom $nom découvre $competences" ;

// pour exécuter mon code PHP il faut appeler le serveur
// http://192.168.15.15/08-exo.php