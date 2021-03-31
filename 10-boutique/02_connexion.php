<?php
    // Connexion BDD
    require_once 'inc/init.php';

    // Si $_POST est différent de vide
    if (!empty($_POST)) { // Si des données sont en POST
        // jeprint_r($_POST); 

        // Vérification des champs du form
        if (!isset($_POST['pseudo']) || strlen($_POST['pseudo']) <4 || strlen($_POST['pseudo']) >20 ) {
            $contenu .= '<div class="alert alert-danger">Le pseudo doit contenir entre 4 et 20 caractères.</div>';
        } // fin du if isset pseudo

        if (!isset($_POST['mdp']) || strlen($_POST['mdp']) <4 || strlen($_POST['mdp']) >20 ) {
            $contenu .= '<div class="alert alert-danger">Le mot de passe doit contenir entre 4 et 20 caractères.</div>';
        } // fin du if isset mdp

        // Vérification des erreurs
        if (empty($contenu)) { // si $_contenu est vide, pas d'erreurs
            echo "<p>vous êtes connecté</p>";
        } else {
            echo "<p>Il y'a une erreur dans votre mot de passe ou votre identifiant, merci de réessayer</p>";
        };

    }

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Mon style css -->
    <link href="css/style.css" rel="stylesheet">
    <title>La Boutique - connexion</title>
  </head>
  <body>
    <h1>La Boutique - Connecter-vous !</h1>

    <main class="container bg-white m-4 mx-auto p-4">
        <div class="row">
            <div class="col-sm-12 col-md-4 border border-success m-4 mx-auto p-4">
                <h1>La Boutique - Connecter-vous !</h1>
                <?php  echo $contenu ?>

                <!-- FORMULAIRE -->
                <form action="" method="POST">
                    <div>
                        <label for="pseudo">Pseudo : </label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?php echo $_POST['pseudo'] ?? ''; ?>"> 
                    </div>

                    <div>
                        <label for="mdp">Mot de passe : </label>
                        <input type="password" name="mdp" id="mdp" value="" class="form-control">
                        <small><em>Garder votre mot de passe en lieu sûr</em></small>
                    </div>
                    <div>
                        <button type="submit">Connexion</button>
                    </div>

                </form>
                <p>Connecter vous pour administrer la boutique</p>
            </div><!-- fin col -->

        </div> <!-- fin row -->        

    </main><!-- fin main -->


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
