<?php 
$title = "Tableau des multiplications";
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
  <p></p>
  <p></p><br>
  <h2>Français</h2>
  <p></p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-for-loop-exercise-8.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
     $tableau = '<table border="2" cellpadding="3" cellspacing="0">'; 
     for($r=1; $r<=6; $r++){
        $tableau .= '<tr>';
        for($m=1; $m<=5; $m++){
          $tableau .= '<td> ' .$r .' * ' .$m .' = ' .$r*$m.' </td>';
        }
        $tableau .= '</tr>';
     }
    echo $tableau .= '</table>';
    ?>
  </body>
</html>
