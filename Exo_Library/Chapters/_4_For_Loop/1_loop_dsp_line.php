<?php 
$title = "Boucle qui renvoi une ligne formater";
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
  <p>Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.</p>
  <p>There will be no hyphen(-) at starting and ending position. </p><br>
  <h2>Français</h2>
  <p>Créez un script qui affiche 1-2-3-4-5-6-7-8-9-10 sur une seule ligne.</p>
  <p>Il n'y aura pas de tiret (-) à la position de départ et de fin </p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-1.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     
     for($c=1; $c<=10; $c++){
          /*if($c<10){
               echo $c .' - ';
          }else{
               echo $c ." ";
          }*/
          //echo $c ." ";
          $cf = $c<10 ? $c .' - ' : $c ." ";
          echo $cf;
     }               
     ?>
  </body>
</html>
