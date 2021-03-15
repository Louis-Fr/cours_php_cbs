<?php

    echo "<pre>";
    
    // Déclarer un tableau
    $tableau = ["Bonjour", 15, true, 58.12];

    // Ajouter une seule valeur
    $tableau[] = "Une seule valeur";

    // Ajouter des valeurs à la fin (push)
    array_push($tableau, "Fin", 89);
    // Au début (unshift)
    array_unshift($tableau, "Début");

    // Supprimer des valeurs
   // A la fin (pop)  
    array_pop($tableau);
  // Au début (shift)
    array_shift($tableau);
    // Récupérer la dernière valeur supprimer
    array_pop($tableau);

    // Diviser le tableau en plusieurs parties
    $tableau2 = array_chunk($tableau, 2, true);
    // '2' pour le nombre de valeurs par partie et 'true' pour conserver les élements d'origine (index)

    // Mélanger un tableau (de façon aléatoire)
    shuffle($tableau);

    // Faire un tableau Multidimensionnel
    $tableauMulti = [
        0 => [
        "nom" => "Gambier",
        "prenom" => "Stephane",
        "age" => 25,
        "profession" => "livreur"
        ],

        1 => [
        "nom" => "lefebvre",
        "prenom" => "Patrick",
        "age" => 45,
        "profession" => "informaticien"
        ]
    ];
    

    var_dump($tableauMulti[1]["nom"]);
    echo "</pre>";

?>