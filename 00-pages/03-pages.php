<?php 
    define("PI", 3.14,TRUE); // PI est insensible à la casse car TRUE => "pi" ou "PI"
    // define est une fonction qui définit une constante
    echo "la constante PI vaut ", PI, "<br>";
    echo "la constante PI vaut ", pi, "<br>";

    // vérification de l'existence de la constante
    if(defined("PI")) echo "la constante est déjà définie<br>";

    // déclaration d'une constante avec define
    define("sitegravillon", "http://www.gravillon.fr",FALSE);
    echo "l'url de Gravillon est : " .sitegravillon. "<br>";
    echo "visitez le site de <a href=\" ".sitegravillon." \" target=\"_blank\">Gravillon</a>";
    // A REVOIR CARACTERE ECHAPPEMENT DANS PHP
   



?>