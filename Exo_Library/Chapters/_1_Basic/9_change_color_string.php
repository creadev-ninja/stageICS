<?php 
$title = "Change color of letter";
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
  <p>Write a PHP script, which changes the color of the first character of a word.</p>
  <p></p><br>
  <h2>Français</h2>
  <p>Écrivez un script PHP, qui change la couleur du premier caractère d'un mot.</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-9.php">Go To <?php echo $title ?></a> 
  </div>
     <?php

          $str = 'PHP Tutorial';
          $pattern = '/^P/';
          $x = preg_replace($pattern, '<span style="color:green">P</span>', $str);
          echo $x;


     ?>
     
   
  </body>
</html>

