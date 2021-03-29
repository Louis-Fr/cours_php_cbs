<?php 
    $pdoBIBLI = new PDO('mysql:host=localhost;dbname=bibliotheque', // le driver mysql (IBM, ORACLE, ODBC ...), le nom du serveur, le nom de la BDD
    'root', // l'utilisateur pour la BDD
    '', // si vous êtes il y'a un mdp = 'root'
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // CETTE LIGNE SERT 0 AFFICHER LES ERREURS sql DANS LE NAVIGATEUR
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',  // Pour définir le charset des échanges avec la BDD
    ));

?>

<?php // traitement du formulaire




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDD - Bibliotheque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <h1>BDD Bibliotheque</h1>

        <div class="row">
            <div class="col-sm-12">
                <p>Les id des livres de la table LIVRE :</p>
             <?php 
        
            $requete = $pdoBIBLI->query ("SELECT * FROM livre");
            echo "<table><thead>";
            echo "<th>Auteur</th>";
            echo "<th>Livre</th>";
            echo "<th>ID_Livre</th>";
            echo "</thead>";
            while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "<p>".$ligne['id_livre']."<br></p>";
                echo "<p>".$ligne['auteur']."<br></p>";
                echo "<p>".$ligne['titre']."<br></p>";
                
        
            }
            echo "</table>";
            
        ?>
            </div><!-- fin col -->


        <div class="col-sm-12">
        <h2>Formulaire d'insertion</h2>
        <form action="#" method="POST">
        
            <div>
                <label for="titre">Titre du livre</label>
                <input type="text" name="titre" value="titre">
            </div>

            <div>
                <label for="auteur">Auteur</label>
                <input type="text" name="auteur" value="auteur">
            </div>

            <div>
                <label for="id_livre">ID du livre</label>
                <input type="text" name="id_livre" value="livre">
            </div>

            <div>
                <button type="submit">Envoyer</button>
            </div>


            
                       
            </div> <!-- fin col -->
        </div>
       
        
        
        
        
        
        </form>
        
        
    </main>




</body>
</html>