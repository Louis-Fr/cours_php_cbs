<?php 
    // TYPES DE VARIABLES :

    // -ENTIERS (integer), nombre sans virgule
    $nombre = 1;
    echo $nombre;
    echo "</p>";

    // -DECIMAUX (float)
    $nombre2 = 85.1;
    echo $nombre2;
    echo "</p>";

    // -CHAINE (string)
    $chaine = "Ceci est une chaîne de caractère, on affiche la 1ere lettre : ";
    echo "</p>";
    echo $chaine;

    // -BOOLEEN (boolean)
    $booleen = true;
    echo $booleen; // true = 1 / false = 0


    // Connaître le contenu et le type de variable
    var_dump($nomdevariable);
    // utiliser le var_dump peut-être utile en cas de problème

    // L'injection de variable fonctionne uniquement avec les   "" pas avec les ''


    /* MANIPULATION DE VARIABLES
    Dans PHP 8 nouvelle fonctionnalité de gestion de chaîne */

    // afficher le 1 caractère de la chaîne 
    echo $nomdevariable[3];

    // Modifier un caractère de la chaîne 
    $nomdevariable[7] = "A";

    echo "<p>On modifie une lettre - $nomdevariable </p>";
    // Extraire une partie de la chaîne 

    echo substr($nomdevariable, 0, 3);

    // Remplacer une partie de la chaîne AVEC str_replace
    $chaine = str_replace('bonjour', 'test', $nomdelachaine);
    echo $chaine;
    // str_ireplace : insensible à la casse

    // supprimer espaces au début ou en fin de chaîne
    var_dump(trim($chaine));
    

?>