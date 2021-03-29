<?php require_once '../inc/functions.php'; ?> 
<?php require_once '../inc/db_config_DIA.php'; ?> 
<?php require_once '../inc/db_connexion_DIA.php'; ?> 
<?php
    // Traitement du formulaire & insertion dans la BDD
    // Exemple de formulaire pas protégé contre les injections SQL !
    // ok');DELETE FROM commentaire;( - cette phrase peut supprimer toutes les données de la table

    // si $_POST n'est pas vide
    // if (!empty( $_POST)) { 
    //     $resultat = $pdoDIA->query("INSERT INTO commentaire (pseudo, date_enregistrement, message) VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]') ");
    //     // L'ordre est important pour un injection SQL, des indices mélangé facilite l'injection SQL
    //     // NOW() renvoie la date d'aujourd'hui. 
    // }

    if (!empty( $_POST)) { 
        // Pour se protéger des failles :
        // 
        $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
        $_POST['message'] = htmlspecialchars($_POST['message']);

        // 1->prepare
        // 2->execute
        $resultat = $pdoDIA->prepare(" INSERT INTO commentaire (pseudo, date_enregistrement, message) VALUES (:pseudo, NOW(), :message)"); 

        $resultat->execute(array(
            ':pseudo' => $_POST['pseudo'],
            ':message' => $_POST['message'],
            ));

    } // fin du if empty
    
    // Le fait de mettre des marqueurs dans la requête permet de ne pas concaténer les instructions SQL d'origine et celles qui seraient injectées. Ainsi elle ne peuvent pas s'éxecuter successivement. De plus en liant les marqueurs à leur valeur dans execute(), PDO les neutralise automatiquement et les transforment en chaînes de carcatères inoffensifs.

?>
<!doctype html>
<html lang="fr">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>COURS PHP 7 - Sécurité</title>
    </head>
        <body>
            <!-- navigation en include  -->
    <?php require '../inc/nav.php';?>

            <!-- Début jumbotron -->
            <div class="jumbotron container">
                <h1 class="display-4">COURS PHP 7 - Sécurité</h1>
                <hr class="my-4">
            </div> <!--fin de jumbo-->
            <main class="container bg-light">
                <div class="row">
                    <div class="col-sm-12">
                    </div> <!--fin col-->
                    <div class="col-sm-12 p-4">
                        <h3>1 - Création d'une BDD "dialogue" avec les informations suivantes</h3>
                        <ul>
                            <li>Nom de la BDD : dialogue</li>
                            <li>Nom de la table : commentaire</li>
                            <li>la table contient les champs suivant :</li> 
                            <li>Champs : id_commentaire INT PK AI</li>
                            <li>Pseudo : VARCHAR(20)</li>
                            <li>message : TEXT</li>
                            <li>date_enregistrement : DATETIME</li>
                        </ul>
                    </div> <!--fin col-->

                    <div class="col-sm-12">
                        <!-- action reste vide si nous insérons des données avec cette même page et POST va envoyer les infos du form dans la superglobale $_POST -->
                        <form action="" method="POST"> <!-- début formulaire -->
                            <div>
                                <label for="pseudo">Pseudo</label>
                                <input type="text" id="pseudo" name="pseudo">
                            </div>

                            <div>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </div>

                            <div>
                                <button type="submit">Envoyer</button>
                            </div>

                            <div>
                                <button type="reset">Renitialiser</button>
                            </div>
                        </form> <!-- fin formulaire -->
                    </div>

                    <div class="col-sm-12 p-4">
                        <h3>2 - Création d'un tableau php pour afficher tous les commentaires</h3>
                    <?php 
                        $requete = $pdoDIA->query ("SELECT* FROM commentaire ORDER BY date_enregistrement ASC"); 
                        $nbr_commentaire = $requete->rowCount();
                        echo "<p>Il y a " .$nbr_commentaire. " commentaire dans la base de données.</p><hr>";
                        // echo "<ul class=\"border border-warning w-50 p-4\">";
                        // while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)){
                        //     echo "<li>".$ligne['message'].'</li>';
                        // }
                        // echo "</ul>";
                        // OU
                        echo "<table class=\"table table-info table-striped text-center\">";
                        echo "<thead><tr><th scope=\"col\">id_commenaire</th><th scope=\"col\">Pseudo</th><th scope=\"col\">Message</th><th scope=\"col\">Date d'enregistrement</th></tr></thead>";
                        while($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                            if ($ligne['message'] != '') {
                            echo "<tr>";
                            echo "<td>". $ligne['id_commentaire']. "</td>";
                            echo "<td>". $ligne['pseudo']. "</td>";
                            echo "<td>". $ligne['message']. "</td>"; 
                            echo "<td>". $ligne['date_enregistrement']. "</td>";  
                            echo "</tr>";
                        }}
                        echo "</table>";
                        // Modifier des informations déjà existante dans la BDD, içi rajout d'informatation à l'identifiant commentaire 12 qui était vide
                        $pdoDIA->exec('UPDATE commentaire SET pseudo = \'Barbie\', message = "Je suis d\'accord" WHERE id_commentaire = 12');
                        // Supprimer une ligne de la BDD
                        $pdoDIA->exec('DELETE FROM commentaire WHERE id_commentaire = 13');
                        // Supprimer une information dans une cellule de la BDD se fait par modification
                        // $pdoDIA->exec('DELETE FROM commentaire  WHERE id_commentaire = 7');
                        $pdoDIA->exec('UPDATE commentaire SET pseudo = \'\' WHERE id_commentaire = 7');
                    ?> </div>
                </div> <!--fin row-->
            </main>
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
        <!-- footer en include -->
    <?php include '../inc/footer.inc.php'; ?>
        </body>
</html>