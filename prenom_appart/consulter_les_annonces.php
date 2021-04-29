<?php // Connexion à la BDD
    require_once 'inc/bdd_connexion.php'; 
?> 

<?php // Traitement du formulaire

    if (!empty( $_POST)) {

    var_dump($_POST); // vérifie que l'on recupére bien les infos

    $_POST['title'] = htmlspecialchars($_POST['title']);
    $_POST['description'] = htmlspecialchars($_POST['description']);
    $_POST['postal_code'] = htmlspecialchars($_POST['postal_code']);
    $_POST['city'] = htmlspecialchars($_POST['city']);
    $_POST['type'] = htmlspecialchars($_POST['type']);
    $_POST['price'] = htmlspecialchars($_POST['price']);
    $_POST['reservation_message'] = htmlspecialchars($_POST['reservation_message']);

    $resultat = $pdoWF3->prepare("INSERT INTO advert (title, description, postal_code, city, type, price, reservation_message) VALUES (:title, :description, :postal_code, :city, :type, :price, :reservation_message)");

    $resultat->execute(array(
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':postal_code' => $_POST['postal_code'],
        ':city' => $_POST['city'],
        ':type' => $_POST['type'],
        ':price' => $_POST['price'],
        ':reservation_message' => $_POST['reservation_message']

    ));

    } // fin if empty
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Le Bon Appart - Consulter les annonces</title>
  </head>
  <body>

  <!-- navigation en include -->
  <?php  include 'inc/nav.php'; ?>


      <main class="container">    
          <div class="row">
              <div class="col-sm-12">
                <h1 class="text-center">Les annonces disponibles</h1>

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