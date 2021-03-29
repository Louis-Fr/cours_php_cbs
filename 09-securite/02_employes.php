<?php 
include '../inc/functions.php'; 
include '../inc/db_config.php'; 
include '../inc/db_connexion.php'; 
?>

<?php // Traitement du formulaire

if (!empty( $_POST)) { 
    // Pour se protéger des failles :
    // Nettoyage
    jeprintr($_POST);
    $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
    $_POST['nom'] = htmlspecialchars($_POST['nom']);
    $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
    $_POST['service'] = htmlspecialchars($_POST['service']);
    $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
    $_POST['salaire'] = htmlspecialchars($_POST['salaire']);
        
    // 1->prepare
    // 2->execute
    $resultat = $pdoENT->prepare(" INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service,  :date_embauche, :salaire)"); 
    // NOW(); fonction pour la date actuel, doit-être en miroir par rapport aux index

    // $resultat = $pdoENT->prepare(" INSERT INTO employes (prenom, nom, sexe, service, salaire) VALUES (:prenom, :nom, :sexe, :service, :salaire)"); 

    $resultat ->execute(array(
        ':prenom' => $_POST['prenom'],
        ':nom' => $_POST['nom'],
        ':sexe' => $_POST['sexe'],
        ':service' => $_POST['service'],
        ':date_embauche' => $_POST['date_embauche'],
        ':salaire' => $_POST['salaire'],
    ));
     
   } // fin du if empty

?> <!-- fin traitement formulaire -->

<!-- Faire le tableau -->
<!-- Le formulaire -->
<!-- Traitement du formulaire dans la même page -->

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>02 - Employes</title>
  </head>
  <body>
    <?php include '../inc/nav.php'; ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Exo employes</h1>
            <p class="lead"> Faire le tableau --> Le formulaire --> le traitement du formulaire dans la même page</p>
        </div>
    </div>  <!-- fin jumbotron -->

    <main class="container">
        <div class="row">
            <div class="col-sm-12">
            <!-- OUVERTURE PHP --> <?php 
            
                $requete = $pdoENT->query("SELECT * FROM employes");
                $resultat = $requete->rowCount();
                echo "<p>Il y'a " .$resultat. " employés dans cette table.</p>" ;
            
            
                echo "<table class=\"table table-striped\">";
                    echo "<thead>";
                    echo "<th>prenom</th>";
                    echo "<th>nom</th>";
                    echo "<th>sexe</th>";
                    echo "<th>service</th>";
                    echo "<th>date_embauche</th>";
                    echo "<th>salaire</th>";
                    echo "<th>infos</th>";
                    echo "</thead>";
            
                 while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                        echo "<td>".$ligne['prenom']."</td>";
                        echo "<td>".$ligne['nom']."</td>";
                        echo "<td>".$ligne['sexe']."</td>";
                        echo "<td>".$ligne['service']."</td>";
                        echo "<td>".$ligne['date_embauche']."</td>";
                        echo "<td>".$ligne['salaire']."</td>";  
                        echo "<td><a href=\"02_fiche_employes.php?id_employes=".$ligne['id_employes']."\">Fiche</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>  <!-- FERMETURE PHP -->
            </div> <!-- fin col -->

           
            <a href=""></a>

            <div class="col-sm-12">
                <!-- FORMULAIRE -->
                <form action="" method="POST">
                    <div>
                        <!-- for, id, name doivent être identique -->
                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="prenom">
                    </div>

                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom">
                    </div>

                    <div>
                        <label for="sexe">Sexe</label>
                        <input type="radio" id="sexe" name="sexe" value="m" checked="Homme">
                        <input type="radio" id="sexe" name="sexe" value="f" checked="Femmme">
                    </div>

                    <div>
                        <label for="service">Service</label>
                        <input type="text" id="service" name="service">
                    </div>

                    <div>
                        <label for="salaire">Salaire</label>
                        <input type="text" id="salaire" name="salaire">
                    </div>

                    <div>
                        <label for="date">Date d'embauche</label>
                        <input type="date" id="date_embauche" name="date_embauche">
                    </div>

                    <div>
                        <button type="submit">Envoyer</button>
                    </div>

                </form> <!-- FIN FORMULAIRE -->








                


            </div>
        </div> <!-- fin row -->


    </main> <!-- fin main -->

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