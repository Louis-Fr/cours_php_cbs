<!DOCTYPE html>
<?php 
    // on ouvre un passage php
    // déclaration d'une variable PHP avec $
    $variable1 = "PHP 7 (qui est dans une variable)";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
       echo "<title>Page 01, un exemple</title>";
    ?>
</head>
<body>
    <?php
        echo "<h1>Cours sur le $variable1</h1>";
    ?>
    <p>Utilisation de variables et de passage PHP, on travaille aussi avec : <br>
    <?php
        $variable2 = "MySQL";
        echo $variable2;
        echo "</p>"; // pour sauter une ligne

        $variable2 = "coucou"; 
        echo $variable2; 
        echo "</p>"; 
    ?>
    <hr>

    <?php "<blockquote>$variable2, variable2, on t'entend le $variable2<blockquote>"; ?>

    <?php print_r($GLOBALS); ?>
    <hr>
    <?php print_r($_COOKIE); ?>

</p>


</body>
</html>