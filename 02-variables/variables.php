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
            <h1 class="display-4">COURS PHP 7 - Introduction</h1>
            <p class="lead">Une variable est un conteneur d'une valeur d'un de ses types utilisés par PHP (entiers, flottants, chaînes de caractères, tableaux, booléens, objets, ressource ou NULL).</p>
            <hr class="my-4">
        </div>
    </div> <!-- fin juMbotron -->
    
    <!-- contenu principal -->
    <main class="container-fluid bg-white">
        <div class="row">
           <div class="col-sm-12 col-md-6">
                <h2>Les variables</h2>
                    <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi du nom de la variable. Les règles de nomenclature sont les suivantes :</p>
                    <ul>
                        <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le caractère de soulignement (_).</li>
                        <li>Les caractères suivants peuvent être les mêmes plus des chiffres (mais ne peut commencer par un ciffre).</li>
                        <li>
                            <?php
                                echo "<p>Nom du fichier inclus : ".__FILE__ ."</p>";
                            ?>
                        </li>
                        <li>La déclaration des variables n'est pas obligatoire en début de script. C'est là une différence notable avec les langages fortement typés comme Java ou C. Vous pouvez créer des variables n'importe où, à condition bien sûr de les créer avant de les utiliser, même s'il reste possible d'appeler une variable qui n'existe pas sans provoquer d'erreur.</li>
                        <li>L'initialisation des variables n'est pas non plus obligatoire et une variable non initialisée n'a pas de type précis.</li>
                        <li>Les noms des variables sont sensibles à la casse (majuscules et minuscules). $mavar et $MaVar ne désignent donc pas la même variable.</li>
                    </ul>
            </div>

                <div class="col-sm-12 col-md-6">
                    <h3>Les noms de variables suivants sont corrects</h3>
                                <ul>
                                    <li>$mavar</li>
                                    <li>$_mavar</li>
                                    <li>$mavar2</li>
                                    <li>$M1</li>
                                    <li>$_123</li>
                                </ul>
                    <h3>Les noms de variables suivants sont illégaux</h3>
                        <ul>
                            <li>$*mavar</li>
                            <li>$5_mavar</li>
                            <li>$mavar2+</li>
                        </ul>
                </div>

                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <p>L'affectation consiste à donner une valeur à une variable. Lors de la création d'une variable, vous ne déclarez pas son type.
                            C'est la valeur que vous lui affectez qui détermine ce type. Dans PHP, vous pouvez affecter une variable par valeur ou par référence. 
                        </p>
                        <p>Exemples :</p>
                        <ul>
                            <li>$mavar=75;</li>
                            <li>$mavar="Paris";</li>
                            <li>$mavar=7*3+2/5-91%7; //PHP évalue l'expression puis affecte le résultat </li>
                            <li>$mavar=mysql_connect($a,$b,$c); //la fonction retourne une ressource </li>
                            <li>$mavar=isset($var&&($var==9)); //la fonction retourne une valeur booléenne</li>
                        </ul>
                    </div>

                </div> <!-- fin row -->
            

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <p>Avec le code suivant écrit dans un fichier nommé infos.php  placé sur le serveur d'évaluation on obtient toutes les infos sur le php exécuté dans ce serveur.</p>
                    <blockquote class="border border-warning w-50 p-2">
                    <code>
                    &lt;?php
                    <br>phpinfo();
                    <br>
                    ?>
                    </code>
                    </blockquote>
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php
                        echo "<h3>Aujourd'hui nous sommes le ". 
                        date('d/m/Y')."</h3>";
                        echo"<h4>Bienvenue sur le cours PHP 7 </h4>";
                    ?>
                    <hr>
                        <h5>Le cycle de vie d'une page PHP</h5>
                        <ul>
                            <li>Envoi d'une requête HTTP par le navigateur client vers le serveur du type http://www.monserveur.fr.page.php</li>
                            <li>Interprétation par le serveur du code PHP contenu dans la page appelée</li>
                            <li>Envoi par le serveur d'un fichier dont le contenu est purement HTML</li>
                        </ul>
                    </div>
                </div>  

                <div class="row">
                    <div class="col-sm-12">
                        <a href="../00-pages/01-page.php" class="btn btn-secondary btn-sm mb-2" role="button">Une page en php</a>
                    </div>
                </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2>Inclure des fichiers externe</h2>
                    <table class="table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Fonction</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>

                            <tbody>
                                <tr>
                                    <td><p>includes("nom_fichier.php")</p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>require("nom_fichier.php")</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>include_once("nom_fichier.php")
                                   require_once 
                                    </td>
                                   <td>
                                    Contrairement aux deux précédentes, ces fonctions ne sont exécutées qu'une seule fois, même si elles figurent dans une boucle ou si elles ont déjà été exécutées une fois le code qui précède.
                                   </td>
                                </tr>
                            </tbody>
                    </table> <!-- fin table -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <h2>Les variables prédéfinies</h2>
                    <p>PHP dispose d'un grand nombre de variables prédéfinies, qui contiennent des informations à la fois sur le serveur et sur toutes les données qui peuvent transiter entre le poste client et le serveur, comme les valeurs saisies dans un formulaire, les cookies ou les sessions.</p>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Variable</th>
                                <th scope="col">Utilisation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">$_GLOBALS</th>
                                <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. $GLOBALS["mavar"] récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions, par exemple).</td>
                            </tr>

                            <tr>
                                <th scope="row">$_COOKIE</th>
                                <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Les noms des cookies sont les clés de ce tableau (voir le chapitre 13).</td>
                            </tr>

                            <tr> <!-- les th et td doivent être contenu dans tr -->
                                <th scope="row">$_ENV</th>
                                <td>Contient le nom et la valeur des variables d'environnement qui sont changeantes selon les serveurs.</td>
                            </tr>

                            <tr>
                                <th scope="row">$_FILES</th>
                                <td><p>Contient le nom des fichiers téléchargés à partir du poste client</p></td>
                                
                            </tr>


                            <tr>
                                <th scope="row">$_POST</th>
                                <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode GET. Les noms des champs du formulaire sont les clés de ce tableau.</td>
                            </tr>

                            <tr>
                                <th scope="row">$_FILES</th>
                                <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode POST. Les noms des champs du formulaire sont les clés de ce tableau.</td>
                            </tr>
                            

                            <tr>
                            <th scope="row">$_SERVER</th>
                            <td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cours d'exécution. Retenons les variables suivantes :
                            <ul>
                                <li>
                                    $_SERVER["HTTP_ACCEPT_LANGUAGE"], qui contient le code de langue du
                                    navigateur client.
                                </li>
                                <li>
                                    $_SERVER["HTTP_COOKIE"], qui contient le nom et la valeur des cookies lus sur
                                    le poste client.
                                </li>
                                <li>$_SERVER["HTTP_HOST"], qui donne le nom de domaine.</li>
                                <li>$_SERVER["SERVER_ADDR"], qui indique l'adresse IP du serveur.</li>
                                <li>
                                    $_SERVER["PHP_SELF"], qui contient le nom du script en cours. Nous l'utiliserons souvent dans les formulaires.
                                </li>
                                <li>
                                    $_SERVER["QUERY_STRING"], qui contient la chaîne de la requête utilisée pour accéder au script.
                                </li>
                            </ul>
                            </td>
                        </tr>
                            <tr>
                                <th scope="row">$_SESSION</th>
                                <td>Contient l'ensemble des noms des variables de session et leurs valeurs</td>
                            </tr>
                            </tbody>
                        </table> <!-- fin table -->
                    </div> <!-- FIN COL -->
    

                    <div class="col-sm-12">
                    <h2>Les opérateurs d'affectation combiné</h2>
                    <p>En plus de l'opérateur classqieu d'affectation =, il existe plusieurs opérateurs d'affectation combinée. Ces opérateurs réalisent à la fois une opération entre deux opé</p>
                    <table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">Opérateur</th>
						<th scope="col">Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">+=</th>
							<td>Addition puis affectation :<br>
								$x += $y équivaut à $x = $x + $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">-=</th>
							<td>Soustraction puis affectation :<br>
								$x -= $y équivaut à $x = $x - $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">*=</th>
						</tr>
						<tr>
							<th scope="row">$_FILES</th>
							<td>Multiplication puis affectation :<br>
							$x *= $y équivaut à $x = $x * $y<br>
							$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">**=</th>
							<td>Puissance puis affectation<br>
							$x**=2 équivaut à $x=($x)²</td>
						</tr>
						<tr>
							<th scope="row">/=</th>
							<td>Division puis affectation :<br>
							$x /= $y équivaut à $x = $x / $y<br>
							$y peut être une expression complexe dont la valeur est un nombre différent de 0.</td>
						</tr>
						<tr>
							<th scope="row">%=</th>
							<td>Modulo puis affectation :<br>
								$x %= $y équivaut à $x = $x % $y $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">.=</th>
							<td>Concaténation puis affectation :<br>
								$x .= $y équivaut à $x = $x . $y<br>
								$y peut être une expression littérale dont la valeur est une chaîne de caractères.</td>
						</tr>
                    </tbody>
                    </table>
                    </div> <!-- fin col -->
                    <div class="col-sm-12">
                        <h2>5- Les constantes</h2>
                        <p><p>Vous serez parfois amené à utiliser de manière répétitive des informations devant rester constantes dans toutes les pages d'un même site. Il peut s'agir de texte ou de nombres qui reviennent souvent. Pour ne pas risquer l'écrasement accidentel de ces valeurs, qui pourrait se produire si elles étaient contenues dans des variables, vous avez tout intérêt à les enregistrer sous forme de constantes personnalisées.</p>
                        <p>On peut définir ses constantes soi-même cf. ; Pour définir des constantes personnalisées, utilisez la fonction define(), dont la syntaxe est la suivante : <strong>boolean define(string nom_cte, divers valeur_cte, boolean casse)</strong> Voir la page <a href="../00-pages\03-pages.php">suivante</a></p></p>

                        <h3>Les constantes préde=éfinies</h3>
                        <p>Il existe dans PHP un grand nombre de constantes prédéfinies, que vous pouvez notamment utiliser dans les fonctions comme paramètres permettant de définir des options. Nous ne pouvons les citer toutes tant elles sont nombreuses, mais nous les définirons au fur et à mesure de nos besoins. Voir la page <a href="../00-pages\04_constantes_predefinies.php">avec un exemple</a></p>                        

                        <table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Constantes</th>
								<th scope="col">Résultat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">PHP_VERSION</th>
							<td>PHP_VERSION</td>
							</tr>
							<tr>
							<th scope="row">PHP_OS</th>
							<td>Nom du système d'exploitation du serveur : <?php echo "<p>".PHP_VERSION."</p>"; ?></td>
							</tr>
							<tr>
							<th scope="row">DEFAULT_INCLUDE_PATH</th>
							<td>Chemin d'accès aux fichiers par défaut</td>
							</tr>
							<tr>
							<th scope="row">__FILE__</th>
							<td>Nom du fichier en cours d'exécution : <?php echo "<p>".__FILE__."</p>"; ?></td>
							</tr>
							<tr>
							<th scope="row">__LINE__</th>
							<td>Numéro de la ligne en cours d'exécution : 
                                <?php echo "<p>Numéro de la ligne : n° ".__LINE__."</p>"; ?>
                            </td>
                            </tr>
						</tbody>
					</table>
                    </div><!-- fin col -->
                            

                </div> <!-- FIN ROW -->
            </div> <!-- fin container -->
    
    
    </main> 

        <?php require'../inc/footer.inc.php'; 
    
            // entraînement
            // L'injection de variable fonctionne uniquement avec les "" pas avec les ''

            $var = 12;
            echo "<p>Le contenu de la variable : $var , voila pour le contenu de la variable</p>" ;

            // Les types de variables :
            // ENTIERS (integer), nombre sans virgule
            $nombre = 1;
            echo $nombre;
            echo "</p>";

            // DECIMAUX (float)
            $nombre2 = 85.1;
            echo $nombre2;
            echo "</p>";

            // chaînes de caractères (string)
            $chaine = "Ceci est une chaîne de caractère, on affiche la 1ere lettre : ";
            echo "</p>";
            echo $chaine;
            // afficher le 1 caractère de la chaîne 
            echo $chaine[3];
            // Modifier un caractère de la chaîne 
            $chaine[3] = "b";
            echo $chaine;
            echo "</p>";

            // BOOLEEN (boolean)
            $booleen = true;
            echo $booleen; // true = 1 / false = 0
            echo "</p>";

            // Connaître le contenu et le type de variable
            var_dump($nombre);
            // utiliser le var_dump peut-être utile en cas de problème


            echo "<p>Test variable prédéfinies : ". $_SERVER['PHP_SELF']. " -fin";

            echo "<p>Test de la variable prédéfinie :</p>"
             . $_SERVER['PHP_SELF']. 
             "<p>fin</p>";
        
        ?>
            
        

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
