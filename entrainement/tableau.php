<?php

    echo "<pre>";
    
    /* Les différents tableaux :
    tableau
    tableau associatif
    tableau associatif Multidimensionnel  */    
    
    // Déclarer un tableau ; plusieurs manières possibles :
    $tableau = ["Bonjour", 15, true, 58.12];
    $tableau3 = array ('valeur1', 'valeur2', 'valeur3', 'valeur4', 'valeur4');
    $tableau4 = [
    [ 'taille1' => 's',
        'taille2' => false,
        'taille3' => 'l',
        'taille4' => 79 ],

    
    [ 'taille5' => 'f',
    'taille6' => 'd',
    'taille7' => 'm',
    'taille8' => 'n' ]
        
    ];
    var_dump($tableau, $tableau3, $tableau4);
    // Selection d'un élement dans un tab. multi-associatif en le ciblant avec son index 
    $tableau4[1]['taille6'];
    
    // afficher un contenu dans un tab
    // Sélectionner un élement en le ciblant par son indice
    echo '<hr>';
    echo $tableau[3];
    // remplacer une valeur dans un tab existant
    echo $tableau4[0]['taille4'] = 'Bernard';
    // Ajouter un contenu et son indice dans un tab existant
    echo $tableau4[0]['taille5'] = 'Fabrice';
    var_dump($tableau4);
    echo '<hr>';

    // Ajouter une seule valeur
    $tableau[] = "Une seule valeur";
    $tableau[] = 19;
    var_dump($tableau);


    // Ajouter des valeurs à la fin (push)
    array_push($tableau, "Fin", 89);
    var_dump($tableau);
    // Au début (unshift)
    array_unshift($tableau, "Début");
    var_dump($tableau);

    // Supprimer des valeurs
    // A la fin (pop)  
    array_pop($tableau);
    // Au début (shift)
    array_shift($tableau);

    // Récupérer la dernière valeur supprimer
   

    // Diviser le tableau en plusieurs parties
    $tableau2 = array_chunk($tableau, 2, true);
    // '2' pour le nombre de valeurs par partie et 'true' pour conserver les élements d'origine (index)

    // Mélanger un tableau (de façon aléatoire)
    shuffle($tableau);
    var_dump($tableau);

    // Faire un tableau Multidimensionnel associatif
    $tableauMulti = [
        0 => [
        "nom" => "Gambier",
        "prenom" => "Stephane",
        "age" => 25,
        "profession" => "livreur"
        ],

        1 => [
        "nom" => "lefebvre",
        "prenom" => " Michel",
        "age" => 45,
        "profession" => "informaticien"
        ]
    ];

    echo '<p>' .$tableauMulti[0]["nom"]. ' ' .$tableauMulti[1]["prenom"]. '</p>';

    // 

    $tableauMulti2 = [
      'chou' => [
      "Gambier",
      "Stephane",
      25,
      "livreur"
      ],

      'patate' => [
      "lefebvre",
      " Michel",
       45,
      "informaticien"
      ]
  ];

  echo $tableauMulti2['chou'][1] .$tableauMulti2['patate'][3];
  // la balise <p> n'est pas indispensable, elle sert pr la mise en forme
  var_dump($tableauMulti2);
    

    var_dump($tableauMulti[1]["nom"]);
    echo "</pre>";

    // $tableauAssociatif = []



?>