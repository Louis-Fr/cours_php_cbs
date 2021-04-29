<?php 
  include '../inc/functions.php';
  include '../inc/nav.php';
 ?>

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

    <!-- Jumbotron -->
    <div class="jumbotron-container">
            <h1 class="display-4">COURS PHP 7 - La méthode GET</h1>
            <p class="lead">$_GET[] représente les données qui transitent par l'URL.</p>
            <hr>
            <button>
                <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a>
            </button>
    </div> <!-- fin jumbotron -->
    
    <!-- contenu principal -->
    <main class="container bg-white">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                   <?php
                    // jevardump($_GET);

                    // isset : est-ce qu'on a bien tous les indices du tableau ?
                    if(isset($_GET['article']) && isset ($_GET['couleur']) && isset($_GET['prix'])) {
                        echo $_GET['article']; // le isset est vérifié donc on affiche le produit 
                    } else { // sinon on affiche ce message
                        echo "<p>Désolé le produit n'est pas disponible</p>";
                    }

                    // echo $_GET["article"]. "-" .$_GET['couleur']. "-" .$_GET['prix'];
                    
                   ?>
                </div> <!-- fin col -->

                
                

            
                <div class="col-sm-12">
              <?php 
                if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // je fabrique la card si j'ai bien les contenus de mon array $_GET  
                ?>         
                    <div class="card" style="width: 18rem;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php 
                                echo $_GET['article'];
                                ?> 
                            </h5>
                            <p class="card-text">
                                <?php echo $_GET['couleur']. "<br>" .$_GET['prix']. " €"; ?>
                            </p>
                            <a href="panier.php" class="btn btn-primary">Mettre au panier</a>
                        </div>
                    </div>
                    <!-- fin card -->
                <?php
                    } else { //sinon je fabrique un simple p
                        echo "<p>Désolé il n'y a pas de produit sur cette page !</p>"; 
                    } 
                    ?> 
            </div>
            <!-- fin col -->
                
            </div> <!-- fin row -->


        
    
    </main> <!-- fin main-->


    <!-- footer en include -->
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
