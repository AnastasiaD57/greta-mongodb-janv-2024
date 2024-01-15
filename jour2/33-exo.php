<?php 
// http://192.168.15.15/33-exo.php
//function exo(){}

class Exo {
    public int $note = 5 ;
    public string $enonce = "je découvre la POO en PHP";
    public string $dateRemise = "22/01/2024";
    public array $question = ["question 1" , "quel est le mot clé pour générer un objet en PHP ?"];
}
$exo = new Exo();
// l'exo de PHP est sur "je découvre la POO en PHP" noté sur 5 points à rendre le 22/01/2024
echo "l'exo de PHP est sur \"{$exo->enonce}\" noté sur {$exo->note} points à rendre le {$exo->dateRemise} <br>";

// la question1 est quel est le mot clé pour générer un objet en PHP ?
echo "la {$exo->question[0]} est {$exo->question[1]}";

var_dump($exo);

// fonction 
// fonction constructice
// PDO 
