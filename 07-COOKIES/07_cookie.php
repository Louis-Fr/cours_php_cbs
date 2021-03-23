<?php  
require_once '../inc/functions.php'; 

// 2 vérification de l'url ou si l'utilisateur viens pour la 1ére fois ou si on a déjà une langue pour un cookie 
    if (isset ($_GET['langue'])) { // si une langue est passée dans l'url, l'internaute à cliqué sur un des liens, on enverra cette langue dans le cookie
    $langue = $_GET['langue'];
        jeprintr($langue);
    } elseif (isset($_COOKIE['langue'])) { // Si on à recu un cookie appelé "langue" alors la valeur du site sera la valeur du cookie
        $langue = $_COOKIE['langue'];
        jeprintr($langue);
    } else { // sinon si l'utilisateur n'a pas choisi de langue, il arrive pour la premiére fois on va lui mettre "fr" par défaut
        $langue = "fr";
        jeprintr($langue);
        
    }
        // 3- Envoie du cookie avec l'information sur la langue
        // jeprint 
    jeprintr(time());
    $expiration = time() + 365*24*60*60;
    jeprintr($expiration);
    jeprintr($expiration - time());


        // setcookie(); fonction qui fabrique le cookie
        setcookie('langue', $langue, $expiration); // la fonction envoie un cookie appelé "langue" avec la valeur de $langue et pour date d'expiration la valeur de $expiration

        // il n'existe pas de fonction prédéfinies qui permettent de supprimer un cookie, pour rendre un cookie inactif, on utilise setcookie() avec le nom concerné et en mettant une date d'expiration à 0 ou antérieur à aujourd'hui...

        // Firefox > inspecter > stockage 
        // Chrome > Inspecter > Application > stockage 
?>


<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>COURS PHP 7 - COOKIE</title>
  </head>
  <body>
  
    <!-- navigation en include -->
  <?php require '../inc/nav.php';?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-8">COURS PHP 7 - COOKIE</h1>
            <p class="lead">La super globale $_COOKIE : un cookie est un petit fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui contient des informations.</p>
            <hr>
            <button>
            <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
        </div>
    </div> <!-- fin jumbotron -->

    <!-- CONTENU PRINCIPAL -->
    <main class="container">
        
            <div class="row">
                <div class="col-sm-12">
                    <p>Les cookies sont automatiquement renvoyé au serveur web par le navigateur. Lorsque que l'internaute navigue dans les pages concernées par le ou les cookies PHP permet de récupérer très facilement les données contenues dans un cookie ; car les informations sont stockées dans une superglobale $_COOKIE</p>
                    
                    <p class="alert alert-danger">Un cookie étant sauvegardé sur le poste de l'utilisateur, il peut-être modifié, détourné ou volé ! On n'y met donc aucune informations sensibles : ref. bancaires, numéro de sécu, mdp, ni même le panier d'achat</p>
                    <!-- 1/ on envoie la langue choisie par l'url ; la valeur "fr" est récupérée dans la superglobale $_GET -->
                    <h2>Choissisez la langue</h2>
                    <a href="?langue=fr" class="btn btn-primary">Français</a>
                    <a href="?langue=es" class="btn btn-danger">Espagnol</a>
                    <a href="?langue=it" class="btn btn-warning">Italien</a>
                    <a href="?langue=ru" class="btn btn-secondary">Russe</a>

                    <?php
                        echo "<h3>Langue du site : le site est en $langue </h3>";
                        echo time() "la date du jour ou le timestamp exprimée en seconde.";

                    ?>

                    
                    
                    
                    

                </div> <!-- fin col -->
            </div> <!-- fin row -->


        </div> 
    
    </main> <!-- fin main-->

    <?php require '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
