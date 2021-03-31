<?php
    $pdoSITE = new PDO ('mysql:host=localhost;dbname=site',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ));

?>

<?php

    include 'functions.php';

    // REQUETE SQL
    $requete = $pdoSITE->query ("SELECT * FROM membre");
    // Passage des résultats de la requête dans un tableau avec PDO::FETCH_ASSOC
    $ligne = $requete->fetch(PDO::FETCH_ASSOC);
    // Affichage des données 
    echo $ligne['prenom'];
    // Le résultat s'affiche la connexion fonctionne

    jeprint_r($ligne); // l'appel de fonctions marche
  

?>