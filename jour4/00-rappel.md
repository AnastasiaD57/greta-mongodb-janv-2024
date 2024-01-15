# rappel les bases de PHP

- les 5 types de variables
    - string
    - integer et float
    - boolean
    - array 
        - tableau indexé
        - tableau associatif
    - objet (attention pour créer un objet il faut d'ABORD créer un class)
- en fonction du type de variable => traitements associés
- string => concaténation 
- integer / float => calcul addition / soustraction / multiplication / division / puissance / modulo 
- boolean => true / false => comparaison 
- 3 structures
    - if + switch  => la même chose que js 
    - boucle       => la même chose que js 
    - function     => ça ressemble mais il y a des elements de syntaxe différents


// créer un fonction qui calcul les prix avec la TVA 

en JS 
function prixTTC ( prixHT ){
 return prixHT * 1.2 ; 
}

const prixVoitureTTC = prixTTC( 10000.3 ); 

en PHP 
function prixTTC ( float  $prixHT ) : float {
    return $prixHT * 1.2 ; 
}
// mode d'emploi très synthétique de votre fonction 