<?php
    try {
        $options=
        [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        ];
        $pdoENT = new PDO($db_heb, $db_user, $db_psw, $options); //les variables appelée d'un fichier inc db_config.php avec les informations complètes, (info hebergeur, info connexion utilisateur, info mdp, optionnellement info d'autres variables comme $options dans ce cas)
        }
        catch (PDOException $pe){
            echo "Erreur" .$pe->getMessage(); //avoir le detail du problème de connexion à la BDD à l'ecran
    } 


    /* $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', // le driver mysql (IBM, ORACLE, ODBC ...), le nom du serveur, le nom de la BDD
    , // l'utilisateur pour la BDD
    '', // si vous êtes il y'a un mdp = 'root'
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // CETTE LIGNE SERT 0 AFFICHER LES ERREURS sql DANS LE NAVIGATEUR
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',  // Pour définir le charset des échanges avec la BDD
    )); */
                    


?>