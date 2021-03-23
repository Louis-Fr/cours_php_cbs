<?php
include '../inc/functions.php';
jeprintr($_POST);

if (!empty($_POST)) {
    echo '<p> Prenom : <strong>' .$_POST['prenom']. '</p>';
    echo '<p> Nom : <strong>' .$_POST['nom']. '</p>';
    echo '<p> email : <strong>' .$_POST['email']. '</p>';
    echo '<p> Adresse : <strong>' .$_POST['adresse']. '</p>';
    echo '<p> Code_postal : <strong>' .$_POST['code_postal']. '</p>';
    echo '<p> Ville : <strong>' .$_POST['ville']. '</p>';
    


// on va écrire le contenu de la superglobale dans un fichier texte en l'absence de BDD

    $fichier = fopen('formulaire.txt', 'a'); // fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon cela permet de l'ouvrir 
    
    $donneeformulaire = $_POST['prenom']. ' ' .$_POST['nom']. '//' .$_POST['email']. ' ' .$_POST['adresse']. ' ' .$_POST['code_postal']. ' ' .$_POST['ville']. "\n"; // pour faire des sauts de ligne dans le .txt

    fwrite($fichier, $donneeformulaire);


} // fin if !empty

// on ne peut pas envoyer un mail avec un serveur local


?>

