<?php 
$title = "Get current file name";
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
  <p>Write a PHP script, which will return the following components of the url</p>
  <p>A computer file is a computer resource on a computer that stores data, information, picture, video, settings, or commands used with a computer program. In a graphical user interface an operating system displays a file as an icon.</p><br>
  <h2>Français</h2>
  <p>Écrivez un script PHP pour obtenir le nom du fichier actuel.</p>
  <p>Un fichier informatique est une ressource informatique sur un ordinateur qui stocke des données, des informations, une image, une vidéo, des paramètres ou des commandes utilisées avec un programme informatique. Dans une interface utilisateur graphique, un système d'exploitation affiche un fichier sous forme d'icône.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-7.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
     var_dump($GLOBALS); 
     //var_dump($_SERVER);
     var_dump($_SERVER['PHP_SELF']);

     $current_file_name = basename($_SERVER['PHP_SELF']);
     echo $current_file_name."\n";
     ?>
     
   
  </body>
</html>

