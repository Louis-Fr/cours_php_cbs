<?php 
include '../inc/functions.php'; 
include '../inc/db_config.php'; 
include '../inc/db_connexion.php'; 
// Traitement des infos reçu par $_GET
// jeprintr($_GET);

if (isset($_GET['id_employes'])) { // si l'indice "id_employes" existe ds $_GET donc dans l'URL, c'est ce qu'on a demandé le détail d'un employé.


    // As-t'on recu des infos par($_GET)
    // prepare va toujours avec execute !
    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE id_employes = :id_employes");
    $resultat->execute(array(
        ':id_employes' => $_GET['id_employes'] // on associe le marqueur cide à l'id_employes qui provient l'url
    ));


    if ($resultat->rowCount() == 0) { // si 0 lignes dans $resultat  
        header('location:02_fiche_employes.php'); // on redirige vers 
        exit(); // on arrête le script
    }

    $fiche = $resultat->fetch(PDO::FETCH_ASSOC);
    print_r($fiche);

} else { // si je n'ai pas récupérer l'employé
    header('location:02_employes.php');
    exit(); 
}

    // Traitement de UPDATE de formulaire
    
    if (!empty ($_POST)) {
        $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
        $_POST['nom'] = htmlspecialchars($_POST['nom']);
        $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
        $_POST['service'] = htmlspecialchars($_POST['service']);
        $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
        $_POST['salaire'] = htmlspecialchars($_POST['salaire']);

        // On met tout dans un marqueur
        $resultat = $pdoENT->prepare(" UPDATE employes SET prenom = :prenom,  nom = :nom, sexe = :sexe, service = :service, date_embauche = :date_embauche, salaire =:salaire WHERE id_employes = :id_employes");

        // Fabrique les informations 
        $resultat->execute( array(
            ':prenom' => $_POST['prenom'],
            ':nom' => $_POST['nom'],
            ':sexe' => $_POST['sexe'],
            ':service' => $_POST['service'],
            ':date_embauche' => $_POST['date_embauche'],
            ':salaire' => $_POST['salaire'],
            ':id_employes' => $_GET['id_employes'],
            // $_GET pour id_employes
        ));
        header ('location:02_employes.php');
        exit();


    } /* fin if */



?> <!-- FERMETURE PHP -->

<!-- ?>// Traitement du formulaire

// if (!empty( $_POST)) { 
//     // Pour se protéger des failles :
//     // 
//     jeprintr($_POST);
//     $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
//     $_POST['nom'] = htmlspecialchars($_POST['nom']);
//     $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
//     $_POST['service'] = htmlspecialchars($_POST['service']);
//     $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
//     $_POST['salaire'] = htmlspecialchars($_POST['salaire']);
        
//     // 1->prepare
//     // 2->execute
//     $resultat = $pdoENT->prepare(" INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service,  :date_embauche, :salaire)"); 
//     // NOW(); fonction pour la date actuel, doit-être en miroir par rapport aux index

//     // $resultat = $pdoENT->prepare(" INSERT INTO employes (prenom, nom, sexe, service, salaire) VALUES (:prenom, :nom, :sexe, :service, :salaire)"); 

//     $resultat ->execute(array(
//         ':prenom' => $_POST['prenom'],
//         ':nom' => $_POST['nom'],
//         ':sexe' => $_POST['sexe'],
//         ':service' => $_POST['service'],
//         ':date_embauche' => $_POST['date_embauche'],
//         ':salaire' => $_POST['salaire'],
//     ));
     
//    } // fin du if empty

// ?> fin traitement formulaire -->

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

    <title>Cours PHP 7 - Fiche employé</title>
  </head>
  <body>
    <?php include '../inc/nav.php'; ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-5">Cours PHP 7 - Fiche employé numéro : <?php echo $fiche['id_employes']; ?></h1>
            <p class="lead"> Faire le tableau --> Le formulaire --> le traitement du formulaire dans la même page</p>
        </div>
    </div>  <!-- fin jumbotron -->

    <main class="container">
        <div class="row">
            <div class="col-sm-12">
            <!-- OUVERTURE PHP --> <?php 
            
               /*  $requete = $pdoENT->query("SELECT * FROM employes");
                $resultat = $requete->rowCount();
                echo "<p>Il y'a " .$resultat. " employés dans cette table.</p>" ; */
            
            
                // echo "<table class=\"table table-striped\">";
                //     echo "<thead>";
                //     echo "<th>prenom</th>";
                //     echo "<th>nom</th>";
                //     echo "<th>sexe</th>";
                //     echo "<th>service</th>";
                //     echo "<th>date_embauche</th>";
                //     echo "<th>salaire</th>";
                //     echo "<th>infos</th>";
                //     echo "</thead>";
            
                //  while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                //     echo "<tr>";
                //         echo "<td>".$ligne['prenom']."</td>";
                //         echo "<td>".$ligne['nom']."</td>";
                //         echo "<td>".$ligne['sexe']."</td>";
                //         echo "<td>".$ligne['service']."</td>";
                //         echo "<td>".$ligne['date_embauche']."</td>";
                //         echo "<td>".$ligne['salaire']."</td>";  
                //         echo "<td><a href=\"02_fiche_employes.php?id_employes=".$ligne['id_employes']."\">Fiche</a></td>";
                //     echo "</tr>";
                // }
                // echo "</table>";
            ?>  <!-- FERMETURE PHP -->
            </div> <!-- fin col -->

            <!-- if (isset($_POST['pseudo']) { echo "..."; } else { echo '';} si il n'y a rien je mets une chaîne vide opérateur de coalescence-->
           
            
            <!-- FORMULAIRE -->
            
            <div class="col-sm-12 col-md-6 mt-2">
                <form class="border border-secondary bg-light p-3" action="" method="POST">
                    <div class="form-group">
                        <!-- for, id, name doivent être identique -->
                        <label class="font-weight-bold" for="prenom">Prenom</label>
                        <input class="form-control" type="text" id="prenom" name="prenom" value="<?php echo $fiche['prenom']; ?>">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="nom">Nom</label>
                        <!-- if (isset($_POST['nom']) { echo "..."; } else { echo '';}) si il n'y a rien je mets une chaîne vide : opérateur de coalescence-->
                        <!-- cette opérateur avec $_POST['nom'] et if isset else "résumé" avec l'opérateur de coalescence sera utile si on utilise un seul formulaire pour INSERT et UPDATE-->
                        <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $fiche['nom']; ?>">
                    </div>

                    <div class="form-group">
                
                        <label class="font-weight-bold" for="sexe">Sexe : </label>
                        <input type="radio" name="sexe" value="m" checked> Homme
                        <input type="radio" name="sexe" value="f"<?php if (isset($fiche['sexe']) && $fiche['sexe'] =='f') echo 'checked'; ?>> Femme
                        
                    </div>
                                
                    <div class="form-group">
                        <label class="font-weight-bold" for="service">Service</label>            

                            <select id="service" class="form-control" name="service" value="<?php echo $fiche['service']; ?>">
                            <!-- <option selected>Sélectionnez le service</option> -->
                            <option value="assistant" <?php if(!(strcmp("assistant", $fiche['service']))) {echo " selected";} ;?>>assistant</option>
                            <option value="commercial" <?php if(!(strcmp("commercial", $fiche['service']))) {echo " selected";} ;?>>commercial</option>
                            <option value="comptabilite" <?php if(!(strcmp("comptabilite", $fiche['service']))) {echo " selected";} ;?>>comptabilite</option>
                            <option value="communication" <?php if(!(strcmp("communication", $fiche['service']))) {echo " selected";} ;?>>communication</option>
                            <option value="direction" <?php if(!(strcmp("direction", $fiche['service']))) {echo " selected";} ;?>>direction</option>
                            <option value="informatique" <?php if(!(strcmp("informatique", $fiche['service']))) {echo " selected";} ;?>>informatique</option>
                            <option value="juridique" <?php if(!(strcmp("juridique", $fiche['service']))) {echo " selected";} ;?>>juridique</option>
                            <option value="production" <?php if(!(strcmp("production", $fiche['service']))) {echo " selected";} ;?>>production</option>
                            <option value="secretariat" <?php if(!(strcmp("secretariat", $fiche['service']))) {echo " selected";} ;?>>secretariat</option>
                        </select>
                    
              

                        
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="salaire">Salaire</label>
                        <input class="form-control" type="text" id="salaire" name="salaire" value="<?php echo $fiche['salaire'];  ?>">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="date">Date d'embauche</label>
                        <input class="form-control" type="date" id="date_embauche" name="date_embauche" value="<?php echo $fiche['date_embauche'];  ?>">
                    </div>

                    <div class="form-group">
                        <button class="form-control bg-success text-white" type="submit">Envoyer</button>
                    </div>

                </form> <!-- FIN FORMULAIRE -->
            </div> <!-- fin col -->

            <!-- <div class="col-sm-12 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        
                    </div>
                        
                </div>
            </div> fin col -->

            <div class="col-sm-6 m-auto">
                    <div class="card text-center m-auto bg-info alert alert-success" style="width: 18rem;">

                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item">
                            <?php 
                            if ($fiche['sexe'] == 'm') {
                            echo "<p> Monsieur " .$fiche['prenom']. "</p>";
                            } else {
                                echo "<p> Madame " .$fiche['prenom']. "</p>";
                            };
                            echo "Nom : ".$fiche['nom'];
                            ?> 
                            </li>
                            <li class="list-group-item">
                            <?php 
                            echo "Prénom : ".$fiche['prenom'];
                            ?> 
                            </li>
                            <li class="list-group-item">
                            <?php 
                            echo "Sexe : ".$fiche['sexe'];
                            ?> 
                            </li>
                            <li class="list-group-item">
                            <?php 
                            echo "Service : ".$fiche['service'];
                            ?> 
                            </li>
                            <li class="list-group-item">
                            <?php 
                            echo "Date d'embauche : ".date('d/m/Y',strtotime($fiche['date_embauche']));
                            ?> 
                            </li>
                            <li class="list-group-item">
                            <?php 
                            echo "Salaire : ".$fiche['salaire']. " €";
                            ?> 
                            </li>
                        </ul>

                </div> <!-- fin card -->
            </div> <!-- fin col -->

        </div> <!-- fin row -->


    </main> <!-- fin main -->

    <?php  include '../inc/footer.inc.php' ?>

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