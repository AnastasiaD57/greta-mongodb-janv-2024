# dans MySQL (MariaDB) /sqlite 

```sql
-- créer la base

CREATE DATABASE demo ; 

USE demo ;

-- créer une table

CREATE TABLE exemple (
    nom VARCHAR(200),
    age SMALLINT

 );

-- ajouter des données dans la table que l'on vient de créer

INSERT INTO exemple 
( nom , age )
VALUES
( "Alain" , 22 ) ;
``` 

## sur MongoDB 

```js
use demo ; // créer une base de données toto (MongoDB créer cette base si elle n'existe pas)

db.exemple.insert({ nom : "Alain" , age : 22 }) ; 
// créer la table exemple si elle n'existe pas 
// insérer une ligne (Document) qui contient 2 valeurs 

db.exemple.insert({ nom : "Céline", isAdmin : true }) ; 
```

## sqlite 

créer un fichier .sql // .db 

## MySQL MariaDB 

Vagrant => installé une machine 
http://1.2.3.4/phpmyadmin

dans le site internet => écrire directement nos requêtes SQL ou j'utilise des formulaires dans le site internet 

## pour MongoDB 

=> vous pouvez écrire du code 
=> logiciel MongoDBCompass 

dans le terminal dans lequel vous avez saisit vagrant up 

1 `vagrant ssh` # permet d'accéder à la machine 

2 `sudo su -` # sur linux vous avez des comptes utilisateurs 
            accéder au compte super user 

3 `vi /etc/mongod.conf`

```bash
vi # équivalent de Visual Studio Code pour un terminal 
/etc/mongod.conf # fichier fichier dans linux 
```

utiliser les fleches directionnelles en allant vers le bas jusqu'à la ligne   bindIp: 127.0.0.1

bindIp: 0.0.0.0 (utiliser la lettre i pour insérer)
                (utiliser la touch esc pour sortir de insérer)
                (utiliser la touche x pour supprimer)
                (utiliser la touch esc pour sortir de supprimer)

esc 
:wq! (! certain write quit) attention ce texte est écrit dans le coin en bas à gauche de votre écran 

5 `systemctl start mongod`
une fois que l'on modifie notre configuration de mongodb redémarrer le demon 
attention la commande n'entraine au retour visuel 


vi est un éditeur de texte comme :

- vim 
- emac

---------------

maintenant que l'on a modifié la configuration de mongodb 
on va pouvoir créer nos documents / nos collections / nos bases 

```js
mongo

use demo ;
switched to db demo

db.exemple.insert({nom : "Alain"})
```