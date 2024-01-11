# base de données NoSQL MongoDB

- SGBD 
- installer sur un serveur (Vagrant)
- /etc/mongod.conf => 0.0.0.0
- 192.168.15.15:27027
- outil graphique qui permet de faire des requêtes vers votre SGBD
- MongoDBCompass
- via des boutons vous pouvez facilement supprimer modifier 
- importer des grandes quantités de données au format JSON 
- JSON => ressemble beaucoup au objet en javascript 

{
    "formation" : {
        "nom" : "DWWM",
        "duree" : 4
    }
}

- nous avons réaliser des recherches via MongoDbCompass

db.nom_collection.find( )
- find() est le `SELECT * FROM nom_collection` du MongoDB 

db.nom_collection.find( { duree : 10 })
`SELECT * FROM nom_collection WHERE duree = 10 ` sur MySQL (MariaDB) 

db.nom_collection.find( { duree : { $ne : 10} })
`SELECT * FROM nom_collection WHERE duree != 10 ` sur MySQL (MariaDB) 
$ne = not equal

db.nom_collection.find( { titre : { $regex : "javascript"} })
`SELECT * FROM nom_collection WHERE titre LIKE "%javascript%" ` sur MySQL (MariaDB) 


----

base de données ==== super grosse variable (super gros tableau) avec des mots clés qui permettent de l'utiliser de manière efficace

----

SELECT 
UPDATE
.find()

=> site internet avec des boutons / formulaires / page .... 
// bouton / / formulaires / page => serveur Apache et PHP => demande SQL  =>  base de données
SELECT * FROM pays = "maroc"; => tableau => serveur Apache => ecran 

----

=> objectif utiliser PHP pour travailler avec une base de données 

1 créer un fichier .php 

2 <?php
// dans cette balise du PHP 

 ?>

3 <?php 

$nomVariable = "bonjour" ; // attention le ; est OBLIGATOIRE sur toutes les instructions 

// 5 types de valeurs 

// string 
$premier = "hello" ;
$deuxieme = 'comment allez vous' ; 

// string Heredoc
$troisieme = <<<END
écrire 
autre 
de texte que l'on veut 
END ;

// chiffre integer / float

$age = 10 ; // int
$prix = 20.5 ; // float 

$prixVoiture = 25_000_000 ; // 25000000

// logique / boolean

$quatrieme = true ;
$quatrieme = false ;
$quatrieme = False ;
$quatrieme = FALSE ;

// type complexe 

// array (tableau)

// 2 types de tableaux tableau indexé

$prix = [ 1,2,3 ]; // tableau qui contient 3 int qui sont récupérables via leur position (index)

// tableau associatif 

$etudiant = [ 
      "nom" => "Alain" ,
      "age" => 20,
      "competences" => ["js", "php"] 
];
// demande à la base de données => retourne un tableau au format tableau associatif

// on peut enfin stocker dans des variables des objets 
// en PHP pour créer un objet il faut au préalable créer une class 

class Forme{}
$triangle = new Forme() ; 

$etudiant = [ 
      "nom" => "Alain" ,
      "age" => 20,
      "competences" => ["js", "php"] 
];

$etudiant = [ "nom" => "Alain" ,"age" => 20,"competences" => ["js", "php"] ];

$etudiant=["nom"=>"Alain","age"=>20,"competences"=>["js","php"]];

---

en fonction du type de variable que vous avez / associé à des traitements / opérations

string => concaténation 

$fleur = "jasmin" ;
$couleur = "rose" ; 

// 3 manières de faire de la concaténation
$bouquet = $fleur . " " . $couleur ; 
$bouquet = "$fleur $couleur" ; 
$bouquet = "{$fleur} {$couleur}" ; 

// interpolation le fait d'avoir une variable calculée dans une concaténation

// 