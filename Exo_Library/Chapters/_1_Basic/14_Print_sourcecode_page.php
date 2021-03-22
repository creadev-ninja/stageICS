<?php 
$title = "Afficher le code source d'une page web";
?>

<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
  <h1><?php echo $title ?></h1>
  <div>
  <h2>Anglais</h2>
  <p>Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/").</p>
  <p>The web page usually means what is visible, but the term may also refer to a computer file, usually written in HTML or a comparable markup language. Web browsers coordinate various web resource elements for the written web page, such as style sheets, scripts, and images, to present the web page.</p><br>
  <h2>Français</h2>
  <p>Ecrivez un script PHP pour afficher le code source d'une page Web (par exemple "http://www.example.com/").</p>
  <p>La page Web signifie généralement ce qui est visible, mais le terme peut également faire référence à un fichier informatique, généralement écrit en HTML ou dans un langage de balisage comparable. Les navigateurs Web coordonnent divers éléments de ressources Web pour la page Web écrite, tels que des feuilles de style, des scripts et des images, pour présenter la page Web.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-14.php">Go To <?php echo $title ?></a> 
  </div>

     <?php
          echo "<hr>";
          $sCode = highlight_file("9_change_color_string.php");
          echo $sCode;
          echo "<hr>";
          //var_dump($_GET);
          print_r($_GET);
     ?>
     
   
  </body>
</html>