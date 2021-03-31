<?php require_once 'inc/init.php';

    // GESTION DE L'AFFICHAGE EN ARRIVANT SUR LA PAGE
    if(isset($_GET['id_produit'])) { 
        $resultat = $pdoSITE->prepare( "SELECT * FROM produit WHERE id_produit = :id_produit" );
        $resultat->execute(array(
            ':id_produit' => $_GET['id_produit'] // déclaration des marqueurs
        ));
        // print_r($resultat);
        if ($resultat->rowCount() == 0 ) { 
            header('location:produit.php'); 
            exit(); 
        } // fin du if
        
        // Déclaration de la variable pour afficher les infos dans le html
        $fiche = $resultat->fetch(PDO::FETCH_ASSOC); 
        } else { 
            header('location:produit.php'); // redirection vers une page
            exit(); // on arrête le script               
        } 
    // jeprint_r($_SESSION); 
    // jeprint_r($fiche['photo']);
?> 

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
      <main class="container">    
          <div class="row">
            <div class="col-sm-12 col-md-8 mx-auto m-4 p-4 text-center">
                <div class="card text-center m-auto alert alert-success border border-success p-5" style="width: 30rem;">
                    <h1 class= "p-3">Fiche produit : <br> <?php echo $fiche['titre'];?> </h1>
                    <ul class="list-group list-group-flush border border-success">
                        <li class="list-group-item">
                            <?php 
                            echo "<img class=\"img-fluid\" src=\"{$fiche['photo']}\">";
                            ?> 
                        </li>
                        <li class="list-group-item">
                        <?php 
                        echo "Description : ".$fiche['description'];
                        ?> 
                        </li>
                        <li class="list-group-item">
                        <?php   
                        echo "Prix : ".$fiche['prix']. " €";
                        echo "<li class=\"list-group-item\">Stock : ".$fiche['stock']."</li>";
                        ?> 
                        </li>
                    </ul>
                        <button type="button" class="btn btn-warning border border-danger p-4">ACHETER</button>
                </div><!-- Fin de card -->
                <button type="button" class="btn btn-light border border-success p-4 mt-5"><a href="produit.php">Retour à la boutique</a></button>
            </div><!-- Fin de col -->
        </div><!-- fin row -->
    </main><!-- fin main -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
