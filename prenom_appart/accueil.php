<?php
    require_once 'inc/bdd_connexion.php';
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
      
  <!-- NAV Bootstrap -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="ajouter_une_annonce.php">Ajouter une annonce</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="consulter_les_annonces.php">Consulter les annonces</a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </nav>


      <main class="container">    
          <div class="row">
              <div class="col-sm-12">
                <h1 class="text-center">Le bon Appart</h1>

               
          
                <?php
                    // faire une requête SQL puis l'afficher dans un table 

                    $requete = $pdoWF3->query("SELECT * FROM advert");
                    $resultat_requete = $requete->rowCount();
                    echo "<p>il y a actuellement $resultat_requete annonces en ligne.</p>"; 

                    echo "<table class=\"table table-striped\">";
                        echo "<thead>";
                            echo"<th>Titre de l'annonce</th>";
                            
                            echo"<th>Code postal</th>";
                            echo"<th>Ville</th>";
                            echo"<th>Type d'annonce</th>";
                            echo"<th>Prix</th>";
                            echo"<th>Fiche annonce</th>";
                        echo "</thead>";
                        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {

                            echo "<tr>";
                                echo "<td>".$ligne['title']."</td>";
                                
                                echo "<td>".$ligne['postal_code']."</td>";
                                echo "<td>".$ligne['city']."</td>";
                                echo "<td>".$ligne['type']."</td>";
                                echo "<td>".$ligne['price']."</td>";
                                echo "<td><a href=\"consulter_une_annonce.php?id=\">Consulter une annonce</td>";
                            echo "</tr>";
                        }
                    echo "</table>";

                    /* 
                    echo "<table>";
                        echo "<thead>";
                            foreach ($resultat as $index => $value) {
                                echo "<td>".$resultat['title']."</td>";
                            }

                        echo "</thead>";
                    echo "</table>";
                    */
                    ?>
            

            </div><!-- fin col -->
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

