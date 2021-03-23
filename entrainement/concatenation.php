<?php
    require_once '../inc/db_config.php';
    require_once '../inc/db_connexion.php';
    include '../inc/functions.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenation</title>
</head>
<body>

<h1>Concatenation</h1>
    <?php // ouverture passage php 

        // On ne modifie pas $pdoENT : c'est la variable de connexion à la BDD
        $requete = $pdoENT->query("SELECT * FROM employes");
        jevardump($requete);
        $nbr_services = $requete->rowCount();
        ( PDO::FETCH_ASSOC );
        
        echo "<p>Il y a " .$nbr_services. " services dans la base de donnée.</p>";
        
        // toutes les balises sont considérée comme string en php
        echo "<ul>";
        // tant que ds la variable $ligne il y'a des infos on les affiches
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>".$ligne['prenom']."</li>";
        }
        echo "</ul>";
        
    ?> 

    <?php include '../inc/footer.inc.php'; ?>
    

   
</body>
</html>