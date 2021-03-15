<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Cours PHP 7 - 
    
    <?php // ouverture passage PHP
    setlocale(LC_ALL, 'fr_FR');
    echo strftime("%A %e %B %Y"); 
    echo '-';
    date_default_timezone_set("Europe/Paris");
    echo date('H:i:s');
    echo '<p>Test footer</p>';
    ?>
    </span> 

    <a href="https://www.php.net/manual/fr/function.date.php">La documentation</a>
  </div>
</footer>





