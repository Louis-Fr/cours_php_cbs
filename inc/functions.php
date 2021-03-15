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
?>















