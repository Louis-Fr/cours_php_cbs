<?php
    require_once 'inc/init.php';

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>La Boutique - Produits</title>
  </head>
  <body>
    <main class="container">    
            <div class="row">
                <div class="col-sm-12">
                    <h1>La Boutique - Les Produits</h1>

                        <?php
                            echo "<table class=\"table table-success table-striped border border-success\">";
                            echo "<thead><th>Référence</th><th>Catégorie</th><th>Titre</th><th>Couleur</th><th>Taille</th><th>Public</th><th>Prix</th><th>Stock</th><th>Fiche</th></thead>";
                            // Pas de PDO::FETCH_ASSOC avec foreach !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                            foreach ( $pdoSITE->query( " SELECT * FROM produit ORDER BY titre " ) as $infos ) { 
                            echo "<tr>";
                            echo "<td>" .$infos['reference']. " </td>";
                            echo "<td>" .$infos['categorie']. " </td>";
                            echo "<td>" .$infos['titre']. " </td>";
                            echo "<td>" .$infos['couleur']. " </td>";
                            echo "<td>" .$infos['taille']. " </td>";
                            echo "<td>" .$infos['public']. " </td>";
                            echo "<td>" .$infos['prix']. " </td>";
                            echo "<td>" .$infos['stock']. " </td>";
                            echo "<td>
                                <a href=\"fiche_produit.php?id_produit=".$infos['id_produit']."\"> Voir sa fiche </a></td>"; // On envoie en GET avec ?
                                // L'injection de PHP dans le a fait du GET
                                echo "</tr>";
                            } // fin du foreach
                            echo "</table>";
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
