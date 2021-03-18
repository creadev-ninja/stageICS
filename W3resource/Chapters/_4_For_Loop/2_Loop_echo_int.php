<?php 
$title = "Boucle de comptage";
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
  <p>Create a script using a for loop to add all the integers between 0 and 30 and display the total.</p>
  <p></p><br>
  <h2>Français</h2>
  <p>Créez un script à l'aide d'une boucle for pour ajouter tous les entiers entre 0 et 30 et afficher le total .</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-2.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     
     $cal = 0;
     for($c=0; $c<=30; $c++){
          $cal += $c ;
          //echo $cal ."\r\n <br>";
     }
     echo "calcul = " .$cal;

     /*for($c=0; $c<=10; $c++){
          $c = $c + $c;
          echo $c .'='. $c .' + '.$c .'<br>';
     }
     echo " result = " .$c;*/              
     ?>
  </body>
</html>
