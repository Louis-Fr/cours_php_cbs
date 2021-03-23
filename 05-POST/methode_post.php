<?php include '../inc/functions.php'; ?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>COURS PHP 7</title>
  </head>
  <body>
  
    <!-- navigation en include -->
  <?php require '../inc/nav.php';?> 

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">COURS PHP 7 - La méthode GET</h1>
            <p class="lead">Réceptionne les données d'un formulaire</p>
            <hr>
            <button>
            <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
        </div>
    </div> <!-- fin jumbotron -->
    
    <!-- 
        contenu principal 
                            -->

    <main class="container bg-white">
        
            <div class="row">
                <div class="col-sm-12">
                <h5>Formulaire</h5>
                <ul>
                    <li>Un formulaire doit toujours être dans une balise pour fonctionner </li>
                    <li>L'attribut "method" indique comment les données vont circuler vers le PHP.</li>
                    <li>L'attribut action indique l'URL de destination des données, si l'attribut action est vide les donnés vont vers le même script ou sur la même page</li>
                    <li>Enuite les "names" doivent être renseigné car ils constituent les indices de $_POST qui réceptionne les données.</li>
                </ul>

                <form method="POST" action="" class="p-2"> <!-- début formulaire -->
                <!-- action vide renvoie vers la même page -->
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom de famille</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>

                    <div class="form-group">
                        <label for="commentaire">Votre Commentaire</label>
                        <textarea id="commentaire" rows="2" name="commentaire"></textarea>
                    </div>

                    <button type="submit" class="btn btn-small btn-primary">Envoyer</button>

                </form> <!-- fin  formulaire -->

                <div class="col-sm-12">
                    <ul>
                        <li>$_POST est une superglobale qui permet de récupérer les données saisies dans un formulaire,</li>
                        <li>$_POST est donc un tableau (array), et il est disponible dans tous les contextes du script,</li>
                        <li>le tableau $_POST se remplit de la manière suivante : 
                            <code>$_POST = array(
                            'name1' => 'valeur1',
                            'nameN' => 'valeurN',
                            );</code></li>
                        <li>donc ou name1 et nameN correspondent aux attributs "name" du formulaire, et où valeur1 et valeurN correspondent aux valeurs saisies par l'internaute.</li>
                    </ul>
                
                </div>

                <?php 
                    if (!empty($_POST)){ // Si $_POST n'est pas vide c'est qu'il est rempli et donc que le formulaire a été envoyé, notez qu'en l'état on peut l'envoyer avec des champs vide, les valeurs de $_POST étant alors des strings vides. En effet on peut avoir des informations non obligatoires dans un formulaire et les inputs ne seront pas remplis
                    // jevardump($_POST);
                    echo "<p>Prénom : <strong>" .$_POST['prenom']. "</strong><br>";
                    echo "Commentaire : <strong>" .$_POST['commentaire']. "</strong><blockquote>";
                    }
                ?> 


<!-- $_POST est une super globale, qui permet de récupérer les données saisies dans un formulaire 
$_POST est donc un array, il est disponible dans tous les contextes du script-->

<!-- les indices sont les names du formulaire -->

<!-- GET on passe dans l'URL, POST on envoie -->

                    
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
