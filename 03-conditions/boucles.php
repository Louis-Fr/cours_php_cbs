<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>COURS PHP 7</title>
  </head>
  <body>
  
    <!-- navigation en include -->
  <?php require '../inc/nav.php'; ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">COURS PHP 7 - Les boucles</h1>
            <p class="lead"><p class="lead">Les boucles permettent de répéter des opérations élémentaires un grand nombre de fois sans avoir à réécrire le même code.</p></p>
            <hr>
            <button>
            <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
        </div>
    </div> <!-- fin jumbotron -->
    
    <!-- contenu principal -->
    <main class="container">

    <div class="row mt-4">
    
        <div class="col-sm-12 col-md-6">
            <h2>La boucle while</h2>
            <p>La boucle while (tant que) permet d'affiner le comportement d'une boucle en réalisant une action de manière répétitive tant qu'une condition est vérifiée ou qu'une expression quelconque est évaluée à TRUE et donc de l'arrêter quand elle n'est plus vérifiée, évaluée à FALSE.</p>
            <?php
                $n = 1; 
                while ($n%7 != 0) { //Le script s'arrête ou il trouve un multiple de 7
                    $n = rand(1,100); //rand() fait un tirage de nombres aléatoire compris entre 1 et 100 rand() pour random
                    echo $n. "&nbsp; -"; //non breaking space
                }

            ?>
        
        
        </div> <!-- fin col -->

        <div class="col-sm-12 col-md-6">
            <h2>La boucle do ... while</h2>
            <p>Avec l'instruction do ... while, la condition n'est pas évaluée qu'après une première exécution des instructions du bloc compris ente do et while.</p>

            <?php   
                $n2 = 1; // initialisation de la variable à 1
                // var_dump ($n2);
                do { 
                    $n2 = rand(1,100); // gardons $n = à 1
                    echo $n2. "nbsp; *";
                } while ($n2%7 != 0); // La condition, trouver un multiple de 7 n'est testée qu'après le premier tirage 
                var_dump($n2);      
            
            ?>
        
        </div> <!-- fin col -->
    

    
    </div> <!-- fin row -->

    <div class="row mt-4 border-primary">
        <div class="col-sm-12 col-md-6">
            <h2>La boucle for</h2>
            <p>La boucle for est plus consise, plus ramassée que la boucle while</p>
            <?php
                // for ($i=0; $i <=10 ; $i++) { 
                    

                // }



            // on va afficher les puissances de 2 jusqu'à 8;

            for ($i=0; $i <= 8 ; $i++) { //création d'un tableau indicé avec 9 élements
                $tab[$i] = pow(2,$i); // à l'aide d'une boucle for et de la fonction pow() 
                //$tab[$i] = $i; création d'un tableau avec la valeur i incrémenté
            }
            // var_dump($i);
            // var_dump($tab);
            //

            $val = "une valeur du tableau";
            echo $val. "<br>";

            echo "Les puissances de 2 sont : ";
            foreach ($tab as $val) {
                echo $val. " - ";
            }
            var_dump($tab[2]);
            
            ?>
            
            <p>Lecture des indices et des valeurs d'un tableau</p>
            <?php
                // Création d'un autre tableau
                for ($i=0; $i <= 5 ; $i++) { 
                    $tab[$i] = pow(2,$i); 
                    
                }
                // lecture des indices et des valeurs du tableau
                
                foreach ($tab as $ind => $value) { // récupère indice et valeur
                    echo "2 puissances $ind vaut $val <br>";
                }
                echo "Le dernier indice de mon tableau est $ind et la dernière valeur est $val.";
            ?>
        
        </div> <!-- fin col -->
    </div> <!-- fin row -->

    <div class="row mt-4 border-primary">
        <div class="col-sm-12 col-md-6">
            <h2>La boucle foreach</h2>
            <p>La boucle foreach (pour chaque) est efficace pour lister les élements d'un tableau</p>
            <?php
            // var_dump($i);
            // var_dump($tab);
            //

            $val = "une valeur du tableau";
            echo $val. "<br>";

            echo "Les puissances de 2 sont : ";
            
            foreach ($tab as $val) {
                echo $val. " - ";
            }
            
            ?>
        </div> <!-- fin col -->
    </div> <!-- fin row -->
        
        </div> <!-- fin div container -->
    
    
    
    
    
    
    
    </main><!-- fin main -->

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
