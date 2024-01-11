<?php 
// http://192.168.15.15/11-php-ini.php

// vous pouvez choisir comment php fonctionne 
// vous travaillez sur un code 
// et RIEN ne s'affiche à l'écran 
// PHP est en mode production 

// quand on est en train de découvrir le langage 
// passer en mode test / développement

// il faut aller modifier un fichier spéciale de PHP
// php.ini 
// dans la machine virtuelle
// où est situer le fichier php.ini dans la machine virtuelle
phpinfo(); 
// permet d'avoir toutes les informations sur PHP installé 
// phpinfo(); fonction native (dans le langage PHP)

// http://192.168.15.15/11-php-ini.php

// Loaded Configuration File 
// /etc/php/8.2/apache2/php.ini 

// display_errors	Off
// display_errors	On

// dans le terminal où j'ai lancer vagrant up 
// vagrant ssh
// sudo su - # super admin de notre machine linux
// vi /etc/php/8.2/apache2/php.ini  
// vi editeur de texte dans ton terminal
// /display_errors => recherche dans vi
// Enter
// n

// décalle vers la droite avec la fleche de direction
// jusqu'au premier f de Off
// xx => supprimer les deux ff 
// a
// n 
// esc
// :wq! write and quit
// /etc/init.d/apache2 restart
$erreur ;
//  Parse error: syntax error, => parcourir
// Fatal error: Uncaught Error: Undefined constant "erreur" 