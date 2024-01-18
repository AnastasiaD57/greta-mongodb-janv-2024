# faire communiquer notre navigateur web avec => base de données

1. $connexion via class native PDO 
    -  3 paramètres dans le constructeur de la class 
    - dsn => database server name => url pour base de données
        - protocole mysql://
        - nom base : dbname=nom_base ;
        - où host=localhost ; (base de données dans la même machine QUE le code PHP)
        - encodage caractères charset=utf8
    - login : 
    - password :

2. est ce que je fais un SELECT 
    1. $stmt = $connexion->query("SELECT")
    2. $resultat = $stmt->fetchAll()    

2. est je fais un INSERT DELETE UPDATE 
    1 $nbLigne = $connexion->exec("INSERT")

---

en + super globale PHP 

=> $_GET => récupérer des informations dans l'url après le ? 
=> le fait de utiliser le $_GET => vos requêtes sql 

=> https://www.google.fr/search?
q=informatique&
sca_esv=599405545&
source=hp&
ei=1-ioZbH8Mo-rkdUP6_yDeA&
iflsig=ANes7DEAAAAAZaj25zXjEerPf9OMOZ5vghVED0mjcjt1&
ved=0ahUKEwjxw53XyeaDAxWPVaQEHWv-AA8Q4dUDCA0&uact=5&
oq=informatique&
gs_lp=Egdnd3Mtd2l6IgxpbmZvcm1hdGlxdWUyDhAAGIAEGLEDGIMBGMkDMgsQABiABBiSAxi4BDILEAAYgAQYigUYkgMyCBAAGIAEGLEDMgUQABiABDILEAAYgAQYsQMYgwEyBRAAGIAEMgsQABiABBixAxiDATIFEAAYgAQyBRAAGIAESIcXUK0EWMoUcAJ4AJABAJgBVaABzAaqAQIxM7gBA8gBAPgBAagCCsICEBAAGAMYjwEY5QIY6gIYjAPCAhAQLhgDGI8BGOUCGOoCGIwDwgIREC4YgAQYsQMYgwEYxwEY0QPCAg4QABiABBiKBRixAxiDAcICDhAAGIAEGIoFGJIDGLgEwgIHEAAYgAQYCsICERAuGIAEGLEDGIMBGMcBGK8BwgILEC4YgAQYxwEY0QPCAg4QLhiABBjHARivARiOBQ&
sclient=gws-wiz

$_POST 

=> formulaire 

<form method="post">
    <input type="text" name="BLabla">
    <input type="text" name="titi">
    <textarea name="commentaire"></textarea>
    <input type="submit">
</form>

$_POST["BLabla"];
$_POST["titi"];
$_POST["commentaire"];

// utilisateur final jamais il va coder du PHP / coder html / sql 
// demander aux utilisateurs de notre site 
// cliquer sur des liens $_GET
// remplir des formulaires $_POST

// relancer votre machine vagrant dans le terminal en se positionnant dans le dossier jour5

// créer le fichier 11-exo.php 

// dans ce fichier créer un formulaire 
// ce formulaire va permettre d'ajouter de nouvelles lignes dans notre base de données demo dans la table articles

// ce formulaire contient 3 champs 
// auteur
// categorie
// titre

// une fois que ce formulaire est complété => envoyer au serveur via un $_POST
// les informations saisies => vérifier que le $_POST n'est pas vide
// dans ce cas réalisez un INSERT dans la table articles