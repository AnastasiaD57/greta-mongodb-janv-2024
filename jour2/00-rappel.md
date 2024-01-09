# rappels

- mongodb 
- sgbd NoSql 
- vous utilisez toujours une base de données MAIS avec de nouvelles règles pour stocker / demander / supprimer des informations dans la base 
- mongodb idéal dans le cas où vous avez des données semi structurée : dont le nombre de colonnes est variable / peux évoluer / flexible 

- dans le monde du SQL (classique) Base / Table / ligne (enregistrement)
- dans le monde du NoSQL (mongoDB) Base / Collection / Document

- dans MongoDB pas besoin de créer la structure de la Collection / juste un INSERT va créer la collection si elle n'existe pas 
- si vous réalisez un INSERT => automatiquement MongoDB va ajouter une propriété _id => joue le role de clé primaire ObjectId()

- il existe 4 types de SGBD NoSQL : 
    - clé valeur => Redis
    - Document => MongoDB xxxxx
    - Orienté Colonne => ElasticSearch BigTable
    - Orienté Graph => Neo4j

CRUD (Document)

use notre_base ;

Create db.nom_collection.insert() (mais aussi la collection)
Read db.nom_collection.find() // db.nom_collection.find().pretty()
Update db.nom_collection.update()
       db.nom_collection.findAndModify()
Delete db.nom_collection.remove()

CRUD (Base)

CREATE use notre_base ; 
Read show dbs ;
Update ....
Delete db.dropDatabase(); 

=> Attention MongoBb est une base de données client - serveur
=> il faut au préalable installé un serveur pour pouvoir utiliser ce SGBD (Vagrant)

---

=> il existe plusieurs manières de faire des demandes (requêtes) à une base de données MongoDB 
    - via des lignes de commande 
        - vagrant ssh
        - mongo
        - >  
    - via un outil graphique ( MongoDbCompass ) équivalent de phpmyadmin dans le monde de MongoDB 

rappel 

1. démarrer Virtual Box
2. est de que la machine est démarrée ??? 
3. se positionner dans le terminal dans le dossier (jour1) qui contient le fichier Vagrantfile 
4. vagrant up 
5. télécharger et installer le logiciel  MongoDbCompass : https://www.mongodb.com/try/download/compass
6. puis démarrer le logiciel 
7. la question est ce que mongodb est bien démarré dans ma machine virtuelle 
8. est ce que mongodb est bien ouvert à l'extérieur ??
    1. dans le terminal dans lequel j'ai fait le vagrant up 
    1. vagrant ssh  # accéder à la machine virtuelle
    1. sudo su -  # me mettre en super admin
    1. netstat -putan # liste de tous les ports ouverts en écoute sur votre machine virtuelle
        1. dans la liste il faut trouver 0.0.0.0:27017
    1. si vous ne voyez pas la ligne précédent, il suffit de lancer manuellement le sgbd mongodb via la commande : systemctl start mongod   
    1. et retester la commande : netstat -putan