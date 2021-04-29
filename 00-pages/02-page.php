<?php // on ouvre un passage php

    include("../inc/tete.inc.php"); // include_once ne sera exécuté qu'une seule fois
    include_once("../inc/corps.inc.php"); // require peut générer une erreur fatale
    require_once("../inc/pied.inc.php"); 
    include('../inc/footer.inc.php');

?>