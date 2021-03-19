<?php 
$title = "Boucle modulo damier";
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
  <p>Write a PHP script that creates the following table using for loops.</p>
  <p>Add cellpadding="3px" and cellspacing="0px" to the table tag. </p><br>
  <h2>Français</h2>
  <p>Écrivez un script PHP qui crée le tableau suivant en utilisant des boucles for.</p>
  <p>Ajoutez cellpadding = "3px" et cellspacing = "0px" à la balise de table.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-9.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
     $tableau = '<table border="16" cellpadding="3" cellspacing="0">'; 
     $color = "";
     for($r=1; $r<=8; $r++){
        $tableau .= '<tr>';
        for($m=1; $m<=8; $m++){
          $mod =$r+$m;         
          if($mod%2==0){
               $color = "black ";
          }else{ $color = "white";}
          $tableau .= '<td width="30px" height="30px" bgcolor = "'.$color .'">' .'</td>';
        }
        $tableau .= '</tr>';
     }
    echo $tableau .= '</table>';
    ?>
  </body>
</html>
