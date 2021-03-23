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
            <p class="lead">Voir</p>
            <hr>
            <button>
            <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
        </div>
    </div> <!-- fin jumbotron -->

    <!-- 1 EXO faire un formulaire avec les champs prénom, nom, email, adresse code postal et ville -->

                <form action="03_form_traitement.php" method="POST">
                    <div>
                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="prenom">
                    </div>
                    <div>
                        <label for="nom">nom</label>
                        <input type="text" id="nom" name="nom">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div>
                        <label for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse">
                    </div>
                    <div>
                        <label for="code_postal">Code Postal</label>
                        <input type="number" id="code_postal" name="code_postal">
                    </div>
                    <div>
                        <label for="ville">Ville</label>
                        <input type="text" id="ville" name="ville">
                    </div>

                    <button type="submit" class="btn btn-small btn-primary">Envoyer</button>                
                
                </form> <!-- fin formulaire -->


    <!-- 2 puis récupérer et afficher dans une page 03_form_traitement.php les informations de $_POST  -->

    

    <!-- 3 puis on fabriquera ensemble un fichier . txt pour stocker les informations du form -->
    

   


    <!-- contenu principal -->
    <main class="container">
        
            <div class="row">

                <div class="col-sm-12">
                    
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
