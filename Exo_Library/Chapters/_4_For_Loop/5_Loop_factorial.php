<?php 
$title = "Boucle factoriel d'un nombre";
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
  <p>Write a program to calculate and print the factorial of a number using a for loop.</p>
  <p>The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.</p><br>
  <h2>Français</h2>
  <p>Écrivez un programme pour calculer et imprimer la factorielle d'un nombre en utilisant une boucle for.</p>
  <p>La factorielle d'un nombre est le produit de tous les nombres entiers jusqu'à ce nombre inclus, donc la factorielle de 4 est 4 * 3 * 2 * 1 = 24.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-5.php">Go To <?php echo $title ?></a> 
  </div>
  <?php 
     
     $cal = 1;
     for($c=1; $c<=4; $c++){
          $cal *= $c ;
          echo $c ."\r\n <br>";
     }
     echo "calcul = " .$cal;

     echo "<hr>";

     $r=1;
     for($i=1; $i<5; $i++){
     echo $i.') '.$r.' * '.$i;
     $r *= $i;
     echo ' = '.$r.'<br>';
     }
              
     ?>
  </body>
</html>
