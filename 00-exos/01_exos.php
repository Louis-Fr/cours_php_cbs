<?php
    require_once '../inc/functions.php';
    $chaine = "longtemps je me suis couché tard dans le temps";
    $decimal = 18.74;
    $entier = 500;
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>COURS PHP 7</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <h1>Exos</h1>

    <?php
     

    // Cette fonction permet d'analyser dans le navigateur le contenu et le type d'une variable 
    var_dump($chaine);

    echo "<hr>";

    // print_r est similaire à echo
    print_r("affiche du contenu avec la fonction print_r");
       

    // gettype() 
    echo gettype($chaine);
    echo "<hr>";

    // mini exo ecrire la phase suivante ; la devise de la République, liberté, égalité, fraternité (mettre les termes en variables)
    $devise = "liberté";
    $devise2 = "égalité";
    $devise3 = "fraternité";

    echo "<p>La devise de la République est \"$devise, $devise2, $devise3\".</p>";

    // EXO IF ... ELSE IF ... ELSE ; si le prix est supérieur à 100e, la remise est de 10% sinon la remise est de 5% et donnez le montant du prix net
    // $prix = 55;
    // $discount1 = 55;
    // $discount2 = 0.1;
    // $_cinqpourcent = $prix *;
    // $dixpourcent = $prix * $discount2;

    // if ($prix1 > 100) {
    //     echo "<p>Votre achat est de $prix1, Vous avez une réduction de 10% sur votre achat soit une réduction de </p>";
    // } else {
    //     echo "<p>Votre achat est de $prix2, Vous avez une réductiond de 5% sur votre achat soit une réduction de </p>";

    // }

    $prix = 1200;
    $remise10 = $prix * 0.9;
    $remise5 = $prix * 0.95;

    // echo $remise10;

    if ($prix > 100) {
        echo "Pour un achat de $prix Euros vous avez une remise de 10% : Prix net = $remise10 .";
    } else {
        echo "Pour un achat de $prix vous avez une remise de 5% : Prix net = $remise5 .";
    }
    echo "<hr>";
   
    // exo
    // Si vous achetez un pc à plus de 1000 euros, la remise est de 15%
    // pour un PC de 1000 euros et moins la remise est de 10%
    // si c'est un livre la remise est de 5%
    // pour tous les autres articles articles, la remise est de 2%
    // SI c'est un pc SI leprix est sup ou égal à 1000, la remise est de 15%, SINON la remise est de 10% SINON SI c'est un liver la remise de 5% SINON c'est autre chose 

   
    $choixAchat = "pc";
      
    $remise15 = $prix * 0.85;
    $remise10 = $prix * 0.9;
    $remise5 = $prix * 0.95;
    $remise2 = $prix * 0.98;

    if ($choixAchat == 'pc') {
        if ($choixAchat == 'pc' AND $prix > 1000) {
            echo "Vous avez choisi un pc à $prix vous allez avoir une remise à 15%, vous allez donc payer $remise15 ";
        } else {
            echo "Vous avez choisi un pc à $prix vous aurez une remise de 10%, vous allez donc payer $remise10 ";
        } 
        
    } else if ($choixAchat == "livre") {
        echo "Vous avez choisi un livre, la remise est de 5%, vous allez donc payer $remise5 ";
    } else {
        echo "Vous avez choisi un produit qui n'est ni un pc ni un livre, vous avez uen remise de 2%, vous aller payer $remise2";
    }
 
    // si c'est un PC et si son prix est supérieur à 1000 alors on applique 


    // BOUCLE WHILE 
    // Les boucles sont destinées à répéter du code de facon automatique

    $i = 0;
    while ( $i < 25 ) { //tant que c'est inférieur à 25 on incrémente $i
        echo $i. "**";
        $i++;
    }

    echo "<hr>";

    // EXO 5
    // Dans une boucle faire les options d'un élément select en démarrant à 1920 et en s'arrêtant en 2021

        // $annee = 1920;
        // echo "<label for = \"annee\"> Années </label><select>";
        // while ($annee <= 2021) {  //
        // echo "<option value=\"$annee\">" .$annee. "</option>";
        // $annee++;
        // }
        // echo "</select>";

        $annee2 = 2021;
        echo "<label for = \"annee2\"> Années </label><select name=\"anne\">";
        while ($annee2 >= 1920) {  
        echo "<option value=\"$annee2\">" .$annee2. "</option>";
        $annee2--;
        }
        echo "</select>";
        echo "<hr>";

        // BOUCLE FOR
        // Afficher les mois de 1 à 12 avec une boucle for dans un menu déroulant

        echo "<select>";
        for ($mois = 1; $mois <= 12 ; $mois++) { 
            // echo "<label for = \"mois\"> Mois </label><select mois=\"mois\">";
            echo "<option>" .$mois. "</option>";
        }
        echo "</select>";
        
        echo "<hr>";
        // faire une boucle qui affiche 0 à 9 sur la même ligne
        // compléter cette boucle pour mettre les chiffres dans un tableau html

        echo "<table class=\"table\"><tbody><tr>";
       for ($nombre=0; $nombre <=9 ; $nombre++) { 
        //    echo $nombre; 
           echo "<td>" .$nombre. "</td>";
       }
         echo "</tr></tbody></table>";



       echo "<hr>";
        // DO WHILE - s'éxecute au moins une fois à l'inverse de WHILE qui s'éxecute uniquement si la condition est remplie
        
        $chamalow = 0; // valeur de la boucle

        do {
            echo "<p>Je fais un petit tour de boucle. </p>";
            $chamalow++;
            // var_dump($chamalow);
        } 
        while ($chamalow > 10); //la condition renvoie FALSE tout de suite, pourtant la boucle a tourné une fois

        // EXO 7 
        // si la variable $langue contient espagnol vous dites "hola", si Anglais "hello", si Français "Bonjour";

        $langue = "Espagnol";

        switch ($langue) {
            case 'Anglais':
                echo "Hello";
                break;

                case 'Français':
                    echo "Bonjour";
                    break;
            

                    case 'Espagnol':
                        echo "Hola";
                        break;
            
                        case 'Allemand':
                            echo "Goodtentag";
                            break;

                            default:
                            echo "Sorry I dont understand";
                            break;
            
        }

        // ré-écrire ce switch avec if else if ...

        $langue2 = "Anglais";

        if ($langue2 == "Français") {
            echo "Bonjour";
        } elseif ($langue2 == "Anglais") {
            echo "Hello";
        } elseif ($langue2 == "Espagnol") {
            echo "Hola";
        } else {
            echo "Don't understand";
        }


    ?>
    </main>

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
