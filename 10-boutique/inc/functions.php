<?php

// 1- Fonction PRINT_r //
function jeprint_r($mavariable) { 
    echo"<pre>";
    print_r($mavariable);
    echo"</pre>";
}



// 2- Fonction pour éxecuter les prepare() //
// function executeRequete($requete, $parametres = array ()) { 
//     foreach ($parametres as $indice => $valeur) { // Boucle foreach
//         $parametres[$indice] = htmlspecialchars($valeur); // Evite les injections SQL
//         global $pdoBOU; // "global" pour accéder à la variable $pdoBOU dans l'espace global du fichier init.php
//         $resultat = $pdoBOU->prepare($requete); // puis prépare la requête
//         $succes = $resultat->execute($parametres);// on éxecute
//         if ($succes === false) {
//             return false; // si la requête ne marche pas je renvoie false
//         } else {
//             return $resultat;
//         }// fin if else 
//     }

//     $succes = executeRequete(" INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, adresse, code_postal, ville, statut) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite, :adresse, :code_postal, :ville, 0)", 
//                 array(
//                     ':pseudo' => $_POST['pseudo'],
//                     ':mdp' => $mdp, //on prend le mot de passe hashé
//                     ':nom' => $_POST['nom'],
//                     ':prenom' => $_POST['prenom'],
//                     ':email' => $_POST['email'],
//                     ':civilite' => $_POST['civilite'],
//                     ':adresse' => $_POST['adresse'],
//                     ':code_postal' => $_POST['code_postal'],
//                     ':ville' => $_POST['ville'],
//             ));

//             if ($succes) {
//                 $contenu .= '<div class="alert alert-success">Vous êtes inscrit <a href="connexion.php">Cliquez ici pour vous connecter</a></div>'; 
//             } else {
//                 $contenu .= '<div class="alert alert-danger">Erreur lors de l`\enregistrement !</div>';
//             }//fin du if if if ($succes)


///////// 2 - FONCTION POUR EXECUTER LES prepare() //////////////
function executeRequete($requete, $parametres = array ()) { // utile pour toutes les requêtes du site
    foreach ($parametres as $indice => $valeur) {           // foreach
        $parametres[$indice] = htmlspecialchars($valeur);   // on évite les injections, protection des données
        global $pdoSITE; // on la transforme en variable globale "global"//  nous permet d'accéder à la variable $pdoSITE dans l'espace global du fichier init.php 
        $resultat = $pdoSITE->prepare($requete); // préparer la requete
        $succes = $resultat->execute($parametres); // execute la requete
        if ($succes === false) {
            return false; // si la requête  n'a pas marché je renvoie false
        } else {
            return $resultat; // sinon on renvoie les résultats
        }// fin if else 
    }
}// fermeture fonction executeRequete


// fermeture fonction executeRequete

// 3- Vérifier si le membre est connecté //

// 4- Vérifier le statut du membre //




?>