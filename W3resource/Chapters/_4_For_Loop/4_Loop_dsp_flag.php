<?php 
$title = "Boucle de serie Flag";
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
  <p>Create a script to construct the following pattern, using a nested for loop.</p>
  <p></p><br>
  <h2>Français</h2>
  <p>Créez un script pour construire le modèle suivant, en utilisant une boucle for imbriquée.</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-4.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     
     for($s=1; $s<=5; $s++){

       echo "  \r\n <br>";
       for($n = 1; $n<=$s;$n++){
        
        echo "*  ";
       }
     }
     
     for($s=5; $s>=0; $s--){
          echo "  \r\n <br>";
          for($n = 1; $n<=$s;$n++){ 
          echo "*  ";
          }
     }                  
     ?>
  </body>
</html>
