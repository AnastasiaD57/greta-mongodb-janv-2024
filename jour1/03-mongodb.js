
// variable stocker des informations 
// type de variables => objet 


const etudiant = { // objet // document 
    nom : "Alain",
    age : 22 ,
    adresse : {
        rue : "75 rue de Paris",
        position : {
            lat : 22,
            long : 40
        },
        date_creation : {
            jour : 10,
            mois : 1,
            annee : 2024
        }
    },
    id : 1
}

const etudiant2 = { // objet // document 
    nom : "Céline",
    isAdmin : true 
}

const etudiant3 = { // objet // document 
    estAmis : 1,
    nom : "Zorro",
}


// si tu as des données qui sont structurées 
// table avec nb colonnes QUI ne bougent pas => MySQL 

// si tu as des donnée semi stucturées
// table MAIS tu ne connais pas exactement le nombre de colonnes => MongoDB 

// sur MySQL (MariaDB) => CREATE TABLE ... ( col )
// sur MongoDB => INSERT donnéer dans une table .... 



// SQL =>     Base / Table      / Enregistrement (ligne)
// MongoDB => Base / Collection / Document 


// Dans une base de donnée MySQL 
// table => colonnes => type VARCHAR() INT SMALLINT / DATE / DATETIME

// définir des types sur MongoDB => String / Date / Array / Number / ObjectId / Mixed (à moment String puis Date puis array redevenir String ) ... 

// mongodb un sgbd => système qui necessite un serveur 

// créer une nouvelle machine Vagrant 

