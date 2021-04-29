 <?php  
        $pdoIMO = new PDO('mysql:host=localhost;dbname=immobilier',
        'root',
        '',
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ));

        var_dump($pdoIMO);
?> 
<!-- La connexion à la BDD se fait toujours avant le doctype !!! -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion BDD</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">COURS PHP 7 - Exo connexion BDD</h1>
                <hr>
                <button>
                <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
            </div>
        </div> <!-- fin jumbotron -->

        <!-- PHP -->
        <?php     

        // die('stop le script');

        // REQUETE SQL / A tester dans PHPmyAdmin
        $requete = $pdoIMO->query ("SELECT * FROM agence");
        // Le résultat de la requete dans un tableau avec une boucle while
        // Ne pas mettre le PDO::FETCH_ASSOC avant la while !!!
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>".$ligne['nom']."</p>";
            echo "<p>".$ligne['adresse']."</p>";
            echo "<p>".$ligne['idAgence']."</p>";
        };

        foreach ($ligne as $indice => $value) {
            echo "<p>".$indice['nom']."</p>";
        };
        

         

       
        ?>
    
    <!-- contenu principal -->
    <main class="container">
        
            <div class="row">

                <div class="col-sm-12">
                    
                </div> <!-- fin col -->
            </div> <!-- fin row -->


        </div> 
    
    </main> <!-- fin main-->
</body>
</html>