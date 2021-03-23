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
  <?php require '../inc/nav.php';?>

    <div class="jumbotron container">
        <div class="container">
            <h1 class="display-4">COURS PHP 7 - Introduction</h1>
            <p class="lead"><p class="lead">On retrouve dans PHP la plupart des instructions de contrôle des scripts. Indispensables à la gestion du déroulement d'un algorithme quelconque, ces instructions sont présentes dans tous les langages. PHP utilise une syntaxe très proche de celle du langage C. Ceux qui ont déjà pratiqué un langage tel que le C ou plus simplement JavaScript seront en pays de connaissance.</p></p>
            <hr>
            <button>
            <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
        </div>
    </div> <!-- fin jumbotron -->
    
    <!-- contenu principal -->
    <main class="container bg-white">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <h2>if</h2>
                <p>L'instruction <code>if</code> est la plus simple et la plus utilisée des instructions conditionelles.
                Présente dans tous les langages de programmation, elle est essentielle en ce qu'elle permet d'orienter l'éxecution du script en fonction de la valeur booléenne d'une valeur booléenne d'une expression.</p>

                <?php
                $a = 100;
                $b = 55;
                $c = 25;

                if ($a > $b && $b > $c ) {
                    echo "<p class=\"alert alert-success w-50\">les 2 conditions sont ok";
                }

                ?>
            </d iv> <!-- fin col -->

            <div class="col-sm-12 col-md-4">
                <h2>if ... else</h2>
                <p>L'instruction <code>if...else</code>permet de traiter le cas ou l'expression conditionelle est TRUE et en même tempsd'écrire un traitement de rechange quand elle est évaluée à FALSE, ce que ne nous permet pas une instruction if seule. L'instruction ou le bloc qui suit <code>else</code>qest alors le seul à être est éxécuté. L'exécution continue ensuite normalement après le bloc <code>else</code>.</p>
            </div> <!-- fin col -->

            <?php

              if ($a > $b) {
                echo "$a est supérieur à $b<br>"; 
              } else {
                echo "Non c\'est $b qui est supérieur à $a";
              } 
              echo "</p>";

              echo "<p>Autre exemple</p>";
              echo "<hr>";

              $e = 10;
              $f = 5;
              $g = 2;

              if ($e == 9 || $f > $g) {
                echo "Au moins une des deux conditions est remplie";
              } else {
                echo "les deux conditions sont fausses";
              }

              ?>

              <div class="col-sm-12 md-4">
              <h2>if ... else if ... else</h2>
                <p>Le bloc qui suit les insructions if ou else peut contenir toutes sortes d'instructions, y compris d'autres instructions <code>if... else</code></p>
                <p>Il existe une autre maière d'ècrire un if...else; la condition ternaire</p>
                <p>Dans la ternaire le ? remplace le if et le : remplace le else</p>
                <?php
                $h = 10;
                if ($h == 10) {
                  echo "$h est égal à 10";
                } else {
                  echo '$h est différent de 10';
                }

                // la même en ternaire 
                echo ($h == 10) ? "$h est égal à 10" : "$h est différent de 10"; //si $h est égal à 10, on affiche la première expression sinon la seconde
                ?>


              </div>
              <!-- fin col -->
              

            <div class="col-sm-12 col-md-4">
              <h2>if ... else ... if ... else</h2>
              <?php 
                echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";

              if ($d == 8) {
                ..
                echo "Réponse 1 : \$d est égal à 8";
              } else if ($d != 10) {
                echo "Réponse 2 : \$d est différent de 10";
              } else {
                echo "Réponse 3 : les deux conditions sont fausses";
              }
                echo"</p>";
              ?>

              </div>
              <!-- fin col -->

              </div>
              <!-- fin row -->

              <div class="row">
                <div class="col-sm12 col-md-6">
                  <h2>Switch ... case</h2>
                  <p>Switch permet de comparer à une multitude de valeur comme l'instruction if... else if ... else</p>



                    <?php
                      $dept = 75;
                        switch ($dept) {
                          case 75:
                            echo "Paris";
                            break;
                          
                          case 41:
                          echo "Loir-et-Cher";
                          break;

                          case 78:
                          echo "Yvelines";
                          break;

                          case 92:
                          echo "Hauts de seine";
                          break;

                          default:
                          echo "Département inconnu en IDF";
                          break;

                      
                        }


                    ?>


                </div> <!-- fin col -->
                <div class="col-sm12 col-md-6">

                </div>
              </div> <!-- fin row -->


              

    </main> <!-- fin container -->

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
