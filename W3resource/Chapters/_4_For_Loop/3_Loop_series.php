<?php 
$title = "Boucle de serie";
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
  <p>Create a script to construct the following pattern, using nested for loop.</p>
  <p></p><br>
  <h2>Français</h2>
  <p>Créez un script pour construire le modèle suivant, en utilisant la boucle imbriquée for.</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-3.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     //$star = "* ";
     for($s=1; $s<=5; $s++){
       //echo "* \r\n <br>";
       //echo "S = " .$s ." ";
       echo "  \r\n <br>";
       for($n = 1; $n<=$s;$n++){
        //echo "N = ".$n ."\r\n <br>";
        echo "*  ";
       }
//$star .= $star;
//echo $star."\r\n <br>" ;
      }
      echo "<hr>";
      $m1 = '*';
      $m2 = '0';
      for($i=1; $i<=5; $i++){

        for($j=1; $j<=$i; $j++){
          echo $m1;
          if($j<$i){echo $m2;}
        }
        echo "\r\n<br>";
      }
 
                   
     ?>
  </body>
</html>
