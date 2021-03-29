<?php
    // Process Patrick
        // $pdoDIA = new pdo('mysql:host=localhost;dbname=dialogue',
        // 'root',
        // '',
        // array(
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // CETTE LIGNE SERT 0 AFFICHER LES ERREURS sql DANS LE NAVIGATEUR
        //     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',  // Pour définir le charset
        // ));
    
    // autre maniére
        include '../inc/db_config_DIA.php';
        include '../inc/db_connexion_DIA.php';

    // Requête pour selectionner les élements du tableau
        $requete_test = $pdoDIA->query ("SELECT * FROM commentaire");
        $tableau = $requete_test->fetch(PDO::FETCH_ASSOC);
        var_dump($tableau);
?>


<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>COURS PHP 7 - Sécurité & PHP</title>
  </head>
  <body>
  
    <!-- navigation en include -->
  <?php require '../inc/nav.php';?>


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">COURS PHP 7 - Sécurité & PHP</h1>
            <p class="lead">Cas pratique : un formulaire pour poster des commentaires </p>
            <hr>
            <button>
            <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
        </div>
    </div> <!-- fin jumbotron -->
    
    <!-- contenu principal -->
    <main class="container bg-white">
            <div class="row">

                <div class="col-sm-12 col-md-6 p-4">
                    
                </div> <!-- fin col -->

                <div class="col-sm-12 col-md-6 p-4">
                <p>Création d'une BDD "dialogue" avec les informations suivantes</p>
                    <ul>
                        <li>nom de la BDD : dialogue</li>
                        <li>Nom de la table : commentaire</li>
                        <li>la table contient les champs suivants :</li>
                        <li>id_commentaire INT PK AI</li>
                        <li>Pseudo : VARCHAR(20)</li>
                        <li>message : TEXT</li>
                        <li>date_enregistrement : DATETIME</li>
                    </ul>
                </div> <!-- fin col -->
            </div> <!-- fin row -->

            <div class="row">
                <div class="col-sm-12 col-md-6 p-4">
                <!-- Exo compter les commentaires et affichage des commentaires avec query et boucle while dans un tableau HTML -->
                <?php
                    $requete = $pdoDIA->query ("SELECT * FROM commentaire");
                    $nbr_commentaire = $requete->rowCount();
                    // Pas nécessaire de mettre le résultat dans une new variable
                    echo "<p>il y a " .$nbr_commentaire. " commentaires.</p>";


                    // revoir les tableaux !
                    echo "<table class=\"table table-info table-striped \"><thead>";
                    echo "<th>id_commentaire</th>";
                    echo "<th>pseudo</th>";
                    echo "<th>message</th>";
                    echo "<th>date_enregistrement</th>";
                    echo "</thead>";
                    while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" .$ligne['id_commentaire']. "</td>";
                        echo "<td>" .$ligne['pseudo']. "</td>";
                        echo "<td>" .$ligne['message']. "</td>";
                        echo "<td>" .$ligne['date_enregistrement']. "</td>";
                        echo "</tr>";
                    } 
                    echo "</table>";

                    // correction Patrick
                    



                    // Modifier des informations déjà existante dans la BDD, içi rajout d'informatation à l'identifiant commentaire 12 qui était vide
                    $pdoDIA->exec('UPDATE commentaire SET pseudo = \'Barbie\', message = "Je suis d\'accord" WHERE id_commentaire = 12');


                ?>
                        
                </div> <!-- fin col -->

                <div class="col-sm-12">
                <h3>Correction Patrick</h3>

            <!-- Affichage des commentaires avec query et boucle while et compter les enregistrements de la table
            $resultat = $pdoDIAG->query( " SELECT * FROM commentaire " );
            jeprint_r($resultat->rowCount());
            $nbr_commentaires = $resultat->rowCount();// je compte les résultats et je passe le total dans une nouvelle variable -->
          
            <h5><?php echo "<p> Il y a " .$nbr_commentaire. "commentaires";// je compte les résultats  commentaires?></h5>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pseudo</th>
                                <th>Message</th>
                                <th>Date enregistrement</th>
                            </tr>
                        </thead>

                        <?php
                        
                            while ($nbr_commentaire = $requete->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                   <td><?php echo $requete['id_commentaire'];?></td>
                                   <td><?php echo $requete['pseudo'];?></td>
                                   <td><?php echo $requete['message'];?></td>
                                   <td><?php echo $requete['date_enregistrement'];?></td>
                                </tr>

                                <?php } ?>
                            



                       
                    
                    
                    </table>
                
                </div>
            </div> <!-- fin row -->

                    

    
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
