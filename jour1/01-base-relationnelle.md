# Base de données

- élément critique dans un logiciel 
- une base de données relationnelles est composée de tables 


- table est un concept => Etudiant / Formation / Voiture ... 

pour modéliser une base de données méthode en 3 étapes

MCD : Modèle Conceptuel des Données

table => Entité
caractéristique => Attribut 

tu peux avoir plusieurs Entités 

entre les entités => Relations 
    mot clé + cardinalité 

méthode merise     modèlisation uml
1-1                        1    
1-n                      1..*
n-n                        *

méthode merise

Etudiant    /             Matière 
--------                 ---------
nom      1-1  suivre 1-n    nom
prenom                     duree
email              

Modélisation UML

Etudiant    /             Matière 
--------                 ---------
nom      1..*  suivre 1    nom
prenom                     duree
email              


MLD : Modèle Logique des Données  

=> clé père rentre dans le fils

Etudiant    /             Matière 
--------                 ---------
id                          matiere_id PK
nom     ----------------    nom
prenom                     duree
email  
matiere_id  FK           

Ecole                       Formation
----------                  -------------
nom         1-n propose 1-n nom
adresse                     duree




MPD : Modèle Physique des Données 


du SQL => 

CREATE TABLE matiere (
    matiere_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL ,
    duree SMALLINT
);

CREATE TABLE etudiant (
    etudiant_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL ,
    email VARCHAR(255),
    matiere_id INT NOT NULL , 
    FOREIGN KEY (matiere_id) REFERENCES matiere(matiere_id)
);




