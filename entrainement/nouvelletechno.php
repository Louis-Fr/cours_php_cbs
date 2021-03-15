<?php 
    
    // L'injection de variable fonctionne uniquement avec les "" pas avec les ''
    // le î est considéré comme 2 caractères 

    $var = 12;
    echo "<p>Le contenu de la variable : $var , voila pour le contenu de la variable</p>" ;

    // Les types de variables :
    // ENTIERS (integer), nombre sans virgule
    $nombre = 1;
    echo $nombre;
    echo "</p>";

    // DECIMAUX (float)
    $nombre2 = 85.1;
    echo $nombre2;
    echo "</p>";

    // chaînes de caractères (string)
    $chaine = "Ceci est une chaîne de caractère, on affiche la 1ere lettre : ";
    echo "</p>";
    echo $chaine;
    // afficher le 1 caractère de la chaîne 
    echo $chaine[3];
    // Modifier un caractère de la chaîne 
    $chaine[3] = "L";
    echo "<p>On modifie une lettre - $chaine </p>";
    echo "</p>";
    // Extraire une partie de la chaîne 
    echo substr($chaine, 0, 3);

    // Remplacer une partie de la chaîne
    $chaine = str_replace('CecL', 'pardon', $chaine);
    echo $chaine;
    // str_ireplace : insensible à la casse
    var_dump($chaine);

    // PHP 8 nouvelle fonction de gestion de chaîne 

    // supprimer espaces au début ou en fin de chaîne
    var_dump(trim($chaine)); 


    // BOOLEEN (boolean)
    $booleen = true;
    echo $booleen; // true = 1 / false = 0
    echo "</p>";

    // Connaître le contenu et le type de variable
    var_dump($nombre);
    // utiliser le var_dump peut-être utile en cas de problème
        
    ?>