<?php

    // cette fonction si a besoin des infomations de session devra être placée au début de chaque page  
    session_start(); // Permet de créer un fichier de session avec son identifiant ou de l'ouvrir si il existe déjà et que l'on a reçu un cookie avec l'id dedans

    // Principe des sessions : un fichier temporaire appelé "session est crée sur le serveur, avec un identifiant unique.
    // Cette session est lié à un visiteur, dans le même temps un cookie est déposé sur le poste du visiteur avec l'identifiant  (au nom de PHPSESSID) Ce cookie se détruit quand on quitte le navigateur
    // Le fichier de session peut contenir des informations sensibles ! il n'est pas accessible par le visiteur du site
    print_r($_SESSION);

?>