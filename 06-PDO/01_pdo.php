 <?php include '../inc/functions.php'; ?>

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


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">COURS PHP 7 - PDO</h1>
            <p class="lead">La variable "$pdo" est un objet et représente la connexion à une BDD</p>
            <hr class="my-4">
            <button>
            <a href="https://fr.wikipedia.org/wiki/PHP">Voir plus</a></button>
        </div>
    </div> <!-- fin jumbotron -->
    
    <!-- contenu principal -->
    <main class="container bg-white">
        
            <div class="row">
                <div class="col-sm-12">
                <h2>Connexion à la BDD</h2>
                <p><abbr title="PHP Data Object">PDO est l'acronyme de PHP Data Object</abbr></p>
                <?php
                // variable avec les paramètres de connexion à la base de donnée
                    $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', // le driver mysql (IBM, ORACLE, ODBC ...), le nom du serveur, le nom de la BDD
                    'root', // l'utilisateur pour la BDD
                    '', // si vous êtes il y'a un mdp = 'root'
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // CETTE LIGNE SERT 0 AFFICHER LES ERREURS sql DANS LE NAVIGATEUR
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',  // Pour définir le charset des échanges avec la BDD
                    ));
                    // script de connexion provisoire, uniquement en local
                    // var_dump($pdoENT);

                    //connexion PISOLA
                    // $host='localhost';
                    // $database='entreprise';
                    // $user='root';
                    // $psw='';
                    
                    // $pdoENT = new PDO ('mysql:host='.$host.';dbname='.$database,$user,$psw);
                    // $pdo ->exec("SET NAMES utf8");

                    // jevardump($pdoENT);// l'objet est vide car il n'y a pas de propriétés 
                    // jevardump(get_class_methods ($pdoENT)); //permet d'afficher la liste des méthodes présentes dans l'objet PDO

                    // Les Méthodes dans l'objet pdo pour intéragir avec la base de donnée
                ?>
                    
                </div> 
                <!-- fin col -->


                <div class="col-sm-12">
                    <h2>2- Faire des requêtes avec exec()</h2> 
                    <p>La méthode exec() est utilisée pour faire des requêtes qui ne retournent pas de résultat : INSERT, UPDATE, DELETE</p>   
                    <p>Valeurs de retours : <br>
                    Succès : dans le vardump de requête on aura le nombre de lignes affectés par la requête : 3 delete = integer(3) <br>
                    ECHEC : false = 0
                    </p>
                    <p>VOIR</p>
                    <?php
                        //on va insérer un employé dans la BDD
                        // La requête MySQL
                        // INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Bon', 'm', 'informatique', '2020-03-09', 2000);

                        // $requete = $pdoENT->exec( "INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Bon', 'm', 'informatique', '2020-03-09', 2000)" );

                        // $requete = $pdoENT->exec( "DELETE FROM employes WHERE prenom='Jean' AND nom='Bon'");
                        // jevardump($requete);

                        // echo "Dernier id générée en BDD :" .$pdoENT->LastInsertId();

                    ?>
                    </div><!-- fin div -->

                    <div class="col-sm-12">
                        <h2>3- Faire des requêtes avec <code>query()</code></h2>
                        <p><code>query()</code> est utilisé pour faire des requêtes qui retournent un ou plusieurs résultats : SELECT mais aussi DELETE, UPDATE et INSERT</p>
                        <p>Succès : query() retourne un nouvel objet qui provient de la classe PDOstatement.
                        <br>
                        Echec False</p>
                        <ul>
                            <li>Pour information, on peut mettre dans les paramètres () de fetch</li>
                            <li>PDO::FETCH_NUM : pour obtenir un tableau aux indices numérique</li>
                            <li>PDO::FETCH_OBJ : pour obtenir un dernier objet</li>
                            <li>Ou encore des () vides : pour obtenir un mélange de tableau associatif</li>
                        </ul>
                        <?php
                            // 1- on demande des informations à la BDD car il y a un ou plusieurs résultats avec query()
                            $requete = $pdoENT->query ( "SELECT * FROM employes WHERE id_employes = 417" );
                            // jevardump($requete);

                            // 2- dans cet objet $requete nous ne voyons pas encore les données concernant Amandine. Pourtant elle s'y trouve. Pour y accéder on utilise une méthode de $requete qui est fetch()
                            // jevardump($requete);

                            $ligne = $requete->fetch( PDO::FETCH_ASSOC );
                            //3- avec cette méthode fetch() on transforme l'objet $requete 
                            //4- fetch(), avec le paramètre PDO::FETCH_ASSOC permet de transfomer l'objet $requete en un array associatif appeler ici $ligne : on y trouve en indice le nom des champs de la requête SQL
                            // jevardump($ligne);

                            echo "<p>Nom : " .$ligne['id_employes']. "Prenom : " .$ligne['nom']. "Sexe : ".$ligne['sexe']. "Service : " .$ligne['service']. "Date embauche : " .$ligne['date_embauche']. "Salaire : ".$ligne['salaire']." </p>";

                            // exo afficher le service de l'employé dont l'id est 417 et son nom et prénom
                            // $requete_exo = $pdoENT->query ("SELECT prenom, nom, service FROM employes WHERE id_employes = 417");
                            echo "<p>".$ligne['nom']." " .$ligne['prenom']. " est dans le service ". $ligne['service']."</p>";

                            // correction Patrick
                            $requete = $pdoENT->query ("SELECT * FROM employes WHERE id_employes= 417");
                            $ligne = $requete->fetch();
                            echo "<p> Nom :" .$ligne['nom']. "Prenom "
                            
                        ?>


                        <div class="col-sm-12">
                            <h2>4- Faire des requêtes avec query et afficher plusieurs résultats</h2>

                            <?php
                                //SELECT * FROM employes
                                $requete = $pdoENT->query(" SELECT * FROM employes ORDER BY nom");
                                // simple requête
                                jevardump($requete);
                                
                                //$ligne = $requete->fetch ( PDO::FETCH_ASSOC );
                                // jevardump($ligne);

                                $nbr_employes = $requete->rowCount();// cette méthode rowCount() permet de compter le nbr de rangées (d'engistrements) retournés par la requête
                                // je vardump($ligne);

                                echo "<p>il y a " .$nbr_employes. "employés.</p>";
                                // Nous avons plusieurs résultats dans $requete nous devons faire une boucle pour les parcourir
                                // fetch() va chercher la ligne suivante du jeu de résultat à chaque tour de boucle , et le transforme en objet.
                                // la boucle while permet de faire avancer le curseur dans l'objet. Quand il arrive à la fin, fetch() retourne FALSE
                                while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<p>' .$ligne['prenom']. ' ' .$ligne['sexe']. ' ' .$ligne['date_embauche']. "<br>";
                                }
                                // EXO afficher la liste des différents services dans une ul, en mettant un service par li
                                $requete = $pdoENT->query("SELECT DISTINCT(service) FROM employes");
                                jevardump($requete);
                                $nbr_service = $requete->rowCount();
                                jevardump($nbr_service);

                                // Le fetch (PDO::FETCH_ASSOC) ne doit pas être mis avant la WHILE !
                                // fonction jevardump avec underscore !!!
                                while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<p>' .$ligne['service']. "<br>";
                                }

                                // echo "<ul>";
                                // while ($resultat = $requete3->fetch(PDO::FETCH_ASSOC)) {
                                // echo '<li> Les services de l\'entreprise : ' .$resultat['service']. '</li>';
                                // }
                                // echo "</ul>";

                               
                                
                                
                            ?>

                        </div>
                        <!-- fin col -->
                    </div>

                    <div class="col-sm-12">
                        <!-- EXO 1/ Dans un h2 compter le nombre d'employés -->
                        <!-- 2/ puis afficher toutes les informations des employés dans un tableau HTML triés par ordre alphabétique de nom -->
                        <?php

                        // 1 - 
                        $requete = $pdoENT->query(" SELECT * FROM employes ORDER BY nom ASC ");
                        $nbr_salaries = $requete->rowCount();
                        echo "<h2>Nombre de salariés : " .$nbr_salaries.   "</h2>";
                        // var_dump($nbr_salaries);

                        // 2-
                        // tr = tablerow : rangée de tableau
                        // td = table data, cellule de tableau
                        echo "<table><tbody>";
                        
                        while ($conversions = $requete->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" .$conversions['nom']. "</td>";
                            echo "<td>" .$conversions['prenom']. "</td>";
                            echo "<td>" .$conversions['sexe']. "</td>";
                            echo "<td>" .$conversions['service']. "</td>";
                            echo "<td>" .$conversions['date_embauche']. "</td>";
                            echo "<td>" .$conversions['salaire']. "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody></table>";
                            // revoir les table HTML !

                            // Correction Patrick
                            // Afficher la liste des différents services 



                    echo "<table>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Nom, prénom</th>";
                                echo "<th>Sexe</th>";
                                echo "<th>Service</th>";
                                echo "<th>Date d'entrée</th>";
                                echo "<th>Salaire mensuel</th>";
                            echo "</tr>";
                            echo "</thead>";

                            while ( $conversion = $requete->fetch( PDO::FETCH_ASSOC )) {
                                echo "<tr>";
                                    echo "<td>" .$conversion['id_employes']. " </td>";
                                    echo "<td>" .$conversion['nom']. " " .$conversion['prenom']. "</td>";
                                    echo "<td>" .$conversion['sexe']. " </td>";
                                    echo "<td>" .$conversion['service']. " </td>";
                                    echo "<td>" .$conversion['date_embauche']. " </td>";
                                    echo "<td>" .$conversion['salaire']. " €</td>";
                                echo "</tr>";
                                }
                                echo "</table>";
                                // autant de th, il y'a des td


                                /* Lundi 22/03 */
                            //     echo "<table class=\"table table-primary table-striped\">";
                            //     echo "<thead>";
                            //     echo "<tr>";
                            //     echo "<th>ID</th>";
                            //     echo "<th>Nom, prénom</th>";
                            //     echo "<th>Sexe</th>";
                            //     echo "<th>Service</th>";
                            //     echo "<th>Date d'entrée</th>";
                            //     echo "<th>Salaire mensuel</th>";
                            //     echo "</tr>";
                            // echo "</thead>";
                            // while ( $employe = $requete->fetch( PDO::FETCH_ASSOC )) {
                            // echo "<tr>";
                            //     echo "<td>" .$employe['id_employes']. " </td>";
                            //     if ( $employe['sexe'] == 'f') {
                            //     echo "<td> Mme " .$employe['nom']. " " .$employe['prenom']. "</td>"; 
                            //     } else {
                            //     echo "<td> M. " .$employe['nom']. " " .$employe['prenom']. "</td>"; 
                            //     }            
                            //     // echo "<td>" .$employe['sexe']. " </td>";
                            //     echo "<td>" .$employe['service']. " </td>";
                            //     echo "<td>" .$employe['date_embauche']. " </td>";
                            //     $nombre_format_francais = number_format($employe['salaire'], 2, ',', ' '); 
                            //     echo "<td>" .$employe['salaire']. " €</td>";
                            // echo "</tr>";
                            // }
                            // echo "</table>";

                            // ou avec foreach
                        echo "<table class=\"table table-success table-striped\">";
                        foreach ( $pdoENT->query( " SELECT * FROM employes ORDER BY sexe DESC, nom ASC " ) as $infos ) { //$employe étant un tableau on peut le parcourir avec une foreach. La variable $infos prend les valeurs successivement à chaque tour de boucle
                        // jevardump($infos);
                        echo "<tr>";
                        echo "<td>";
                        if ( $infos['sexe'] == 'f') {
                            echo "<span class=\"badge badge-secondary\">Mme ";
                        } else {
                            echo "<span class=\"badge badge-warning\">M. ";
                        } echo $infos['nom']. " " .$infos['prenom']. "</span></td>";
                        echo "<td>" .$infos['service']. " </td>";

                            // Fonction pour afficher la date en FR avec les noms des jours et des mois en FR
                            setlocale(LC_ALL, 'fr_FR');
                            // $dateBDD = $infos['date_embauche'];
                            // echo "<td>" . strftime('%d %B %Y', strtotime($dateBDD)). " </td>";	

                            // Fonction pour afficher la date en FR plus simplement sans les noms des jours et des mois, uniquement les chiffres.
                            // echo "<td>" .date('d/m/Y', strtotime($infos['date_embauche'])). " </td>";
                            // echo "<td>" .$infos['date_embauche']. " </td>";

                        echo "<td>" .$infos['date_embauche']. " </td>";
                        // Notation française
                        $nombre_format_francais = number_format($infos['salaire'], 2, ',', ' ');
                        echo "<td>" .$nombre_format_francais. " €</td>";
                        echo "</tr>";
                        }
                        echo "</table>";

                           
                        ?>
                    
                    </div> <!-- fin col -->

                    <div class="col-sm-12">
                        <h2>05 - Requête préparées avec prepare()</h2>
                        <p>Les requêtes préparées sont preconisées si vous executez plusieur fois la même requête, ainsi vous eviterez au SGBD : système de gestion de base de donnée de répeter toutes les phrases, analyses, interprétation, éxecution, ect... > On gagne en performance.</p>
                        <p>Les requêtes préparées sont utiles pour nettoyer les données et se prémunir des injections de type SQL(tentative de piratage) cf. 09-securite</p>

                        <?php
                            // une requête préparée se réalise en 3 étapes
                            $nom = 'Grand';//ici j'ai l'info que je cherche dans une variable je cherche un résultat ex. je cherche "Grand"

                            // 1/ on prépare la requête
                            $resultat = $pdoENT->prepare(" SELECT * FROM employes WHERE nom = :nom "); // a/ prepare permet de préparer la requête sans l'exécuter b/:nom est un marqueur qui est vide (comme une boîte vide) et qui attend une valeur c/ $resultat est pour le moment est pour le moment un objet PDOstatement

                            // 2/ on lie le marqueur 
                            $resultat->bindParam( ':nom', $nom );// bindParam permet de lier la marqueur à la variable :nom à une variable $nom on lie les paramètres
                            // $resultat->bindValue( ':nom', 'titi' );// si on a besoin de lier le marqueur à une valeur fixe...
                            
                            // 3/ puis on exécute la requête
                            $resultat->execute(); // permet d'exécuter toute la requête
                            $employe = $resultat->fetch( PDO::FETCH_ASSOC );
                            // jevar_dump($employe);	
                            echo $employe['prenom'] . ' ' . $employe['nom']. ' -  service : ' . $employe['service'] . '<br>';

                            echo "<hr>";

							// Requête préparées sans bindParam
							$resultat = $pdoENT->prepare(" SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom  "); // préparation de la requête
							$resultat->execute(array(
								':nom' => 'Thoyer',
								':prenom' => 'Amandine' // on peut se passer de bindParam
							));
							jevardump($resultat);
							$employe = $resultat->fetch(PDO::FETCH_ASSOC);
							jevardump($employe);

							echo $employe['prenom']. " ".$employe['nom']. "est au service" .$employe['service']; // on affiche les infos
                           

                        ?>


                    </div>
               
            </div>
            <!-- fin row -->


        </div> 
    
    </main> <!-- fin main-->

<!-- footer en include -->
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
