<?php 
header("Location: https://www.w3resource.com/");//tjs l'écrire en tout début de page
$title = "Redirection de page";
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
  <p>Write a PHP script, to check whether the page is called from 'https' or 'http'.</p>
  <p></p><br>
  <h2>Français</h2>
  <p>Ecrivez un script PHP pour rediriger un utilisateur vers une autre page.</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-11.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
          
     ?>
     
   
  </body>
</html>

