<?php include '../inc/functions.php'; ?>
 
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>COURS PHP 7 - Les tableaux</title>
  </head>
  <body>

    <!-- navigation en include -->
    <?php require '../inc/nav.php';?>
    
    <!-- JUMBOTRON -->
    <div class="jumbotron">
        <div class="container container-fluid">
            <h1 class="display-4">COURS PHP 7 - Les tableaux</h1>
            <p class="lead">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes d'un des types de base que vous venez de voir. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D'où l'expression de tableau indicé.</p>
            
        </div>
    </div> <!-- fin jumbotron -->
    
    <!-- contenu principal -->
    <main class="container-fluid bg-white">
      <div class="row">
        <div class="col-sm-12">
          <?php 

            // déclarer un tableau, les valeurs du tableau sont indiqués dans les ()
            // DES ACCOLADES

            $tableau1 = array ('Dalio', 'Gabin', 'Arletty', 'Fernandel', 'Pauline Carton');
            

          $tableau2 = array ('index1' => 'test', 'index2' => 'test2');
            foreach ($tableau2 as $index2 => $value) {
                echo '<p>' .$value. '</p>' ;
                // print_r($tableau2); 
              }
          // echo $tableau1; erreur de type "array to string conversion" on ne peut pas afficher directement un tableau, on doit faire un prin_r, var_dump ou une boucle foreach ou while

          echo "<pre>"; //pour mieux afficher et mieux lire
          var_dump($tableau1); //var_dump affiche le contenu du tableau avec les types de données et les valeurs
          echo "</pre>";

          echo "<pre>";
          print_r($tableau1); //print_r affiche les valeurs sans les types de données
          echo "</pre>";

          // autre facon de déclarer un array

          $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];

          $tableau2[] = 'Roumanie'; // ajout d'un élément dans notre tableau avec des crochets
          print_r($tableau2);
          echo "<br>";

          echo "Fonction date du jour";
          dateJourFr2();
          echo "<br>";

          echo "<strong>var_dump()</strong>";
          jevardump($tableau2);
          echo "<hr>";

          echo "<strong>print_r()</strong>";
          jeprintr($tableau2);
         
          ?> <!-- FIN PASSAGE PHP -->
        </div>
      </div>


      <div class="row">
            <div class="col-sm-12">
                <h2>1- Les tableaux</h2>
                <p>Un tableau, appelé array en anglais est une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type. Elle possedent un indice dont l'index commence à 0.<p>

                <blockquote>

                </blockquote>

                <?php
                    // La variable $tab est un tableau par le simple fait que son nom est suivi de crochet
                    $tab[0] = 2004; 
                    $tab[1] = 31.147;
                    $tab[2] = "PHP 7";
                    $tab[35] = $tab[2]. "et MySQL"; // on concaténe avec le contenu de l'index [2] - les éléments indicés entre 2 et 35 n'existent pas
                    $tab[] = "coucou"; // il mettra l'indice 36 : avantage d'ajouter un élément à la fin d'un tableau sans connaître la valeur du premier indice
                    var_dump($tab);
                    echo "<hr>";
                    echo "Nombre d'éléments du tableau : " .count($tab); // Ils ne sont donc pas compté
                    echo "<hr><p>Le langage préfére de l'open source est $tab[2] <br>";
                    echo "Utilisez $tab[35]</p>";
                    
                    // jevardump($tab);
                    // jeprintr($tab);

                ?>

                <div class="col-sm-12">
                  <h2>Les tableaux associatifs</h2>
                    <p>Dans un tableau associatif nous pouvons choisir le nom des index, c'est à dire que nous associons un indice aux valeurs</p>
                    <!-- On indique les indices et les valeurs
                    avec le couple indice => valeur -->
                     

                  <?php // ouverture du passage php

                    $couleurs = array (
                      'b' => 'bleu',
                      'bl' => 'blanc',
                      'r' => 'rose',
                    );
                    jevardump($couleurs);

                    $tableau = array ('valeur1', 'valeur2');
                    jevardump($tableau);
                    // pour afficher une valeur de notre tableau associatif en le cherchant par son indice
                    echo '<p>La première couleur du tableau est le ' .$couleurs['b']. '</p>'; // quand un tableau associatif est dans des simples quotes il prend des quotes autour de son indice

                    echo "<p> La première couleur du tableau est $couleurs[b]</p>"; // dans des guillemets il y a une exception, l'indice ne prends plus de quotes ... VOIR

                    // Compter le nombre d'élements du tableau
                    // echo "<p>Nombre d'élements dans le tableau \$couleurs\ : " count ($couleurs). "</p>"
                    // echo count($couleurs);
                    echo sizeof($couleurs);

                    // exo avec une boucle foreach parcourez les deux tableaux de cette page et affichez-les dans deux ul

                    echo "<ul class=\"w=50 bg-warning\">";
                    // on parcours le tableau $tableau1 par ses valeurs, la variable $acteur prend les valeurs successivement à chaque tour de boucle, le mot-clef "as" est obligatoire

                    foreach ($couleurs as $acteurs) { // récupère indice et valeur
                      echo "<li>$acteurs</li>";
                    }  
                      echo "</ul>";

                      echo "<ul class=\"w=50 bg-warning\">";
                      foreach ($tableau2 as $pays) {
                        echo "<li class=\"text-white\"> $pays </li>";
                      }
                      echo "</ul>";


                      // jeprintr($pays); // le dernier élement passé dans la boucle
                      // jevardump($acteurs);

                      // utiliser var_dump et print_r uniquement quand on est en développement


                      echo "<ul>";
                        foreach ($tableau1 as $indice => $acteur) { // la boucle parcourt cette fois-ci les indices et les valeurs : d'abord les indices dans une variable $indice => puis les valeurs correspondant à chaque indicde dans une variable $acteur
                          echo "<li> pour $indice, la valeur est $acteur</li>";
                        }
                      echo "</ul>";

                      // - 1 declarez un tableau associatif $contacts avec les indices suivants : prenom, nom, email, tel et vous y mettez les valeurs correspondant à un seul contact

                      $contacts = [
                        "prenom" => "Maxime",
                        "nom" => "Durand",
                        "email" => "maximedurand@gmail.com",
                        "telephone" => "01.12.45.87.96"
                      ];

                      $contacts2 = array (
                        "prenom" => "Maxime",
                        "nom" => "Durand",
                        "email" => "maximedurand@gmail.com",
                        "telephone" => "01.12.45.87.96"
                        );

                      jevardump($contacts);

                      // - 2 avec une boucle foreach vous affichez les valeurs
                      
                      echo "<ul>";
                      foreach ($contacts as $value) {
                      echo "<li>$value</li>";
                      }
                      echo "</ul>";


                      // foreach ($couleurs as $acteurs => ) { // récupère indice et valeur
                      //   // echo "<li>";
                      //   // echo $acteurs;
                      //   // echo "</li>"; 
                      //   echo "<li>$acteurs</li>";
                      // }  


                     

                      echo '<ul>';
                      foreach ($contacts as $indice => $infoscontact) {
                        echo '<li> pour ' .$indice. ' la valeur est :' .$infoscontact. '</li>';
                      }
                      echo "<ul>";

                      
                      foreach ($contacts as $indice => $infoscontact) {
                        if ($indice == 'prenom') { 
                          echo "<h3>$infoscontact</h3>";
                        } else {
                          echo "<p> la valeur du tableau :  </p>";
                        }
                        
                      }

                      // foreach ($contacts as $indice => $infoscontact) {
                      //   if ($indice == 'prenom') {
                      //     echo "<h3> la valeur de prenom est $infoscontact </h3>";
                      //   } else {
                      //      echo 'toto';
                      //   }
                      // }
                      
                      
                      
                       
                      // $contacts[prenom]

                   
                      // 3 - Faites une boucle qui récupére les indices

                      // foreach ($contacts as $indice => $infoscontact) {
                      //   echo '<li>'Pour '$indice .$infoscontact. '</li>';
                      // }
                      // - 3 dans une  autre boucle, vous affichez les valeurs dans des p sauf le prénom qui doit être dans un h3

                    ?>

                  

                  </div>
              </div>

            <div class="col-sm-12">
              <h2>Les tableaux multi-dimensionnels</h2>
              <p>Un tableau multi-dimensionnel est un tableau qui contiendra une suite de tableau.</p>

                <?php
                  $tableau_multi = array (
                    0 => array (
                      'prenom' => 'Jean',
                      'nom' => 'Dujardin',
                      'telephone' => '01.25.45.65.87'
                    ),

                    1 => array (
                      'prenom' => 'Alexandre',
                      'nom' => 'Lamy',
                      'telephone' => '01 45 23 45 63'
                    ),

                    2 => array (
                      'prenom' => 'Stephane',
                      'nom' => 'Tandri',
                      'telephone' => '01 64 23 45 63'
                    ),
                      );
                      // pour afficher Jean
                      // echo "jean";
                      echo $tableau_multi[0]['prenom']; // pour afficher Jean on entre l'indice 0 puis dans le sous tableau on selectionne l'indice.

                      // pour parcourir le tableau multi-dimensionnel on peut faire une boucle for car ses indices sont numériques
                      echo "<ul>";
                      for ($i=0; $i < count($tableau_multi); $i++)  { 
                        echo "<li>" .$tableau_multi[$i]['nom']."</li>";
                        echo  "<li>" .$tableau_multi[$i]['prenom']."</li>";
                      }
                      echo "</ul>";

                      // ou une boucle foreach en passant en variable les contenus de chaque indice du tableau et en ciblant les indices nommés des sous-tableau associatif
                      echo "<p>";
                      foreach ($tableau_multi as $indice => $prenom) {
                        echo $tableau_multi[$indice]['prenom'];
                      }
                      echo "</p>";

                     
                      foreach ($tableau_multi as $indice => $prenom) {
                        echo $tableau_multi[$indice]['prenom'];
                      }
                    
                ?>


            </div> <!-- fin col -->

        </div>
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
  </body>
</html>
