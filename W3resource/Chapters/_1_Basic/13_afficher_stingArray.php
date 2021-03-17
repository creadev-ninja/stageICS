<?php 
$title = "Afficher des valeurs dans un tableau";
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
  <p>Write a e PHP script to display string, values within a table.</p>
  <p>Use HTML table elements into echo. </p><br>
  <h2>Français</h2>
  <p>Ecrivez un script PHP pour afficher la chaîne, les valeurs dans un tableau.</p>
  <p>Remarque: utilisez des éléments de tableau HTML dans l' écho .</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-13.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
          $valeur = ['A'=>1000, 'B'=>2000, 'C'=>4000];
          $array = "<table border=1 cellspacing=0 cellpading=0>";
          
          foreach($valeur as $key => $val){
              $array .= "<tr><td><font color=blue>Salary of Mr. " .$key ." is</td> <td>" .$val ."</font></td></tr>";    
          } 
          $array .="</table>";
          echo $array;
          //<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr>
     ?>
     
   
  </body>
</html>
