<?php 
$title = "Mise en forme des données d'un tableau";
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
  <p>Write a PHP script which will display the colors in the following way :</p>
  <p></p><br>
  <h2>Français</h2>
  <p>Ecrivez un script PHP qui affichera les couleurs de la manière suivante:</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-array-exercise-2.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     $color = array('white', 'green', 'red');
     var_dump($color);

     foreach ($color as $val){
          echo $val .", " ;
     }
     asort($color);
     var_dump($color);//remet les valeurs dans l'ordre, attention les clés bouges avec les valeurs.
     sort($color); //remet dans l'ordre les clés sans bouger les valeurs...
     var_dump($color);
     $liste = "<ul>";

     foreach ($color as $c){
          $liste .= "<li>" . $c ."</li>";
     } 
     $liste .= "</ul>";
     echo $liste;       
     ?>
     
   
  </body>
</html>
