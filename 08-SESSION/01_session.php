<?php

// création ou ouverture d'une session
echo '<h1>Cours PHP 7 - Session </h1>';

echo '<p>Les données du fichier de session sont accessibles et manipulables à partir de la superglobale $_SESSION.</p>';


// cette fonction si a besoin des infomations de session devra être placée au début de chaque page
session_start(); // Permet de créer un fichier de session avec son identifiant ou de l'ouvrir si il existe déjà et que l'on a reçu un cookie avec l'id dedans

// Principe des sessions : un fichier temporaire appelé "session est crée sur le serveur, avec un identifiant unique.
// Cette session est lié à un visiteur, dans le même temps un cookie est déposé sur le poste du visiteur avec l'identifiant  (au nom de PHPSESSID) Ce cookie se détruit quand on quitte le navigateur
// Le fichier de session peut contenir des informations sensibles ! il n'est pas accessible par le visiteur du site

$_SESSION['pseudo'] = 'Tintin';
$_SESSION['mdp'] = 'vol 747';
$_SESSION['email'] = 'tintin@moulinsart.be';


echo '<p>La session est remplie.</p>';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// il est possible de vider une partie de la session avec unset()
unset($_SESSION['mdp']);

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Suppression totale de la session et du fichier de session 
session_destroy();

// echo '<p>La session est detruite.</p>'; // Nous avons effectué un session-destroy() mais il n'est exécuté qu'à la fin de notre script. Nous voyons encore ici le contenu de la session, mais le fichier temporaire dans le dossier temp a bien été supprimé

// Ce fichier contient les infos de session et elles sont accessibles grâce à session_start();

// A RETENIR  : Pour ouvrir une session : session_start;
// Pour fermer une session_destroy;

?>