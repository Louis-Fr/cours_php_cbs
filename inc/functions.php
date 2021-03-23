<?php
// une pemière fonction
    function minPap() {
        echo "<p> Minute Papillon</p>";
    }
//  mini exo, faire une fonction qui affiche le jour de la semaine

function quelJour() {
    echo '<p>Nous sommes';
    setlocale(LC_ALL,'fr_FR');
    echo strftime("%A"); 
    echo '</p>';
}

function dateJourFr2() {
    setlocale(LC_ALL, 'fr_FR');
    echo "<p>Aujourd'hui, nous sommes le " .strftime("%A"). "</p>";
}

// création d'une fonction pour "var_dump" une variable (très utile pour un tableau)
function jevardump($mavariable) { // la fonction nommée avec son paramètre, une variable
    echo"<pre>";
    var_dump($mavariable); // une variable à laquelle on applique la fonction var_dump
    echo"</pre>";
}

// il peut y avoir du style dans la balise echo

// création d'une fonction pour "print_r" une variable (très utile pour un tableau)
function jeprintr($mavariable) { //la fonction nommée avec son paramètre, une variable
    echo"<pre>";
    print_r($mavariable);// une variable à laquelle la fonction print_r
    echo"</pre>";
}

?>

<!-- script : succession d'action, pour débuger commenter les premiéres lignes jusqu'à la fin -->













