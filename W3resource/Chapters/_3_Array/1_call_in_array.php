<?php 
$title = "Appel de valeur d'un tableau";
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
  <p>Write a script which will display the following string.</p>
  <p>"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"</p><br>
  <h2>Français</h2>
  <p>Ecrire un script qui affichera la chaîne suivante.</p>
  <p>"Le souvenir de cette scène pour moi est comme une trame de film à jamais figée à ce moment-là: le tapis rouge, la pelouse verte, la maison blanche, le ciel plombé. Le nouveau président et sa première dame. - Richard M. Nixon "</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-array-exercise-1.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     $color = array('white', 'green', 'red', 'blue', 'black');
     echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
     
     ?>
     
   
  </body>
</html>
