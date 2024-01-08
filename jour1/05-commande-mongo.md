
# créer une base de données dans MongoDB

use formation ;
switched to db formation

# créer une table (collection) et y insérer des données (Document)

```js
db.classe.insert({ nom : "Javascript" , duree : 20 })
```

WriteResult({ "nInserted" : 1 })
si la collection classe n'existe pas => elle est créé
insérer une ligne (Document) dans cette table 

```js
db.classe.insert({ prix : 20 , isActive : true })
```    

ici ça va ajouter une  nouvelle ligne (Document) dans la table (collection ) classe


// si j'ai besoin de connaitre l'ensemble des lignes dans la table classe 

SELECT * FROM classe

db.classe.find()
db.classe.find().pretty()

{
        "_id" : ObjectId("659c06c34bf5a701abb91096"),
        "nom" : "Javascript",
        "duree" : 20
}
{
        "_id" : ObjectId("659c07a74bf5a701abb91097"),
        "prix" : 20,
        "isActive" : true
}

// insérer une propriété qui contient un objet
db.classe.insert({ etudiant : { nom : "Zorro" , age : 22 } })
// insérer une propriétés qui contient un tableau
db.classe.insert({ compétences : ["js" , "php" , "ajax"] })
// insérer une propriété qui appelle un objet javascript
db.classe.insert({ date : new Date() })

<!-- new Date() => javascript
new DateTime() => PHP  -->

=> cas pratique 

1 créer une nouvelle base qui s'appelle exo1 

2 dans cette base créer une collection qui s'appelle demo 

3 dans cette collection insérer les documents suivants 

3.1 nom : Alain , adresse : { rue : 75 ruie de Paris , ville : 'Lille' }

3.2 email : toto@yahoo.fr , position : { lat : 22 , long : 33 }

4 afficher dans la console l'ensemble des documents de la collection demo de la base exo1


