<?php 
$title = "Boucle recherche dans chaine caractère";
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
  <p>Write a program which will count the "r" characters in the text "w3resource".</p>
  <p></p><br>
  <h2>Français</h2>
  <p>Ecrivez un programme qui comptera les caractères "r" dans le texte "w3resource".</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-5.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     
     $str = "W3ressource";
     echo "ORIGINE : " .$str ."\r\n <br>";
     echo "<hr>";
     echo "RESULT : " .substr($str, 1)." / ";
     echo "RESULT1 : " .substr($str, 2)." / ";
     echo "RESULT2 : " .substr($str, -1)." / ";
     echo "RESULT3 : " .substr($str, -2)." / ";
     echo "<hr>";
     echo "RESULT4 : " .substr($str, 0, -2)." / ";
     echo "RESULT5 : " .substr($str, 0, 2)." / ";
     echo "<hr>";
     echo "RESULT6 : " .substr($str, 1, -3)." / ";
     echo "RESULT7 : " .substr($str, 1 , 3)." / ";
     echo "RESULT8 : " .substr($str, 2 , 4)." / ";
     echo "RESULT9 : " .substr($str, 1 , -4)." / ";
     echo "<hr>";
     echo "RESULT10 : " .substr($str, 0, 1)." / ";
     echo "RESULT11 : " .substr($str, 1, 1)." / ";
     echo "RESULT12 : " .substr($str, 2, 1)." / ";
     echo "<hr>";
     
     $cpt = 0;
     $lgt = strlen($str);
     //echo $lgt;

     for($nl=0; $nl <=$lgt; $nl++){
          //echo "RESULT : " .substr($str, $nl , 1)." / "; 
          $letter = substr($str, $nl , 1);
          if($letter == 'r'){
               $cpt++;
               //$cpt += 1;
               echo $cpt ." / ";
          }
          
     }
     echo "TOTAL : " .$cpt ." / ";
     
     
     
        
     ?>
  </body>
</html>
