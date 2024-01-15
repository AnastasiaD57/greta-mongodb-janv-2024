<?php 

// dans 3 jours fin du module numéro 6 
// créer des composants avec PHP qui communique avec une base de données 

// redécouverte les tableaux en PHP

// 2 types de tableau
// indexé (ressemble beaucoup au tableau en javascript)

$liste = []; // tableau vide 
$liste[] = "premier"; // ajouter une valeur et automatiquement PHP va lui associer un index (position) => index 0
$liste[] = "deuxieme"; // index 1

$liste2 = ["a","b", "c"] ; 

array_unshift($liste2, "ajouter au début");

array_splice($liste2,1 , 0 , "deux" ); // je viens d'ajouter entre 
    // "ajouter au début" et "a", la valeur "deux"

array_splice($liste2,1 , 1 , "trois" ); // supprimer la valeur "deux" et la remplacer par le texte "trois"

$liste2[3] = "nouvelle valeur" ; 

// associatif 

$vehicule = [];
        // clé    = valeur 
$vehicule["prix"] = 2000.5 ;
$vehicule["marque"] = "Peugeot";
$vehicule["anneeAchat"] = 2023 ; 
$vehicule["proprietaire"] = [
    "nom" => "Alain",
    "permis" => "B"
]; 

$fleurs = [
    "nom" => "rose",
    "prix" => 10 ,
    "enStock" => true ,
    "caracteristiques" => ["#00000" , "20"]
];
// rappel la syntaxe la propre en javascript des tableaux associatifs 
// objet 
/**
const fleur = {
    nom : "rose",
    prix : 10 ,
    enStock : true ,
    caracteristiques : ["#00000" , "20"]
};
 */

$fleurs["caracteristiques"] = "c'est du texte au final"; //modifier

unset($fleurs["prix"]); // supprimer 

$fleurs["prixTTC"] = 30 ; // ajouter

// parcourir des tableaux 

for($i = 0 ; $i < count($vehicule) ; $i++){

}

for($i = 0 ; $i <= count($vehicule) - 1 ; $i++){
    
}

foreach($vehicule as $key => $value){

}

// tableau associatif 

// parcourir pour générer du html 

$diaporama = [
    [
        "url" => "http://img.png",
        "titre" => "paysage"
    ],
    [
        "url" => "http://img2.png",
        "titre" => "maison"
    ],
    [
        "url" => "http://img.png",
        "titre" => "vehicule"
    ]
]; 

foreach($diaporama as $key => $value){
    echo "<article>
            <h2>$value[titre]</h2>
            <img src=\"$value[url]\" alt=\"\">
        </article>
    ";
}

$etudiants = [
    ["nom" => "Alain" ,"age" => 22 , "classe" => "DWWM" ],
    ["nom" => "Zorro" ,"age" => 25 , "classe" => "DWWM" ],
];

echo "<table>
    <tr>
        <th>nom</th>
        <th>age</th>
        <th>classe</th>
    </tr>
";
foreach($etudiants as $key => $value){
    echo "
    <tr>
        <td>$value[nom]</td>
        <td>$value[age]</td>
        <td>$value[classe]</td>
    </tr>
    ";
}
echo "</table>"; 

// pour pouvoir réaliser des requêtes vers une base de données
// il faut un peu comprendre la POO (Programmation Orienté Objet) en PHP 

// en PHP pour créer des objets il faut OBLIGATOIREMENT créer une class 

// objet (ou class) => super variable
// variable dans laquelle on peut stocker à la fois 
// des valeurs 
// des fonctions 
class Salle{
    public string $batiment = "A";
    public int $numero = 10 ;
    public bool $enTravaux = false ; 
}

$salle = new Salle(); // créer un objet depuis la class

echo $salle->batiment ; // "A"

var_dump($salle->enTravaux) ; // false

// lancer votre machine virtuelle 
// créer le fichier 33-exo.php (dans le dossier jour2)

// vous allez créer une class qui s'appelle Exo
// cette class contient 4 propriétés 
// 1 note 5
// 2 enonce : "je découvre la POO en PHP"
// 3 dateRemise : 22/01/2024
// 4 question : tableau indexé 
// [ "question 1" , "quel est le mot clé pour générer un objet en PHP ?"  ]


// écrire dans le navigateur le texte suivante 
// l'exo de PHP est sur "je découvre la POO en PHP" noté sur 5 points à rendre le 22/01/2024
// la question1 est quel est le mot clé pour générer un objet en PHP ?
