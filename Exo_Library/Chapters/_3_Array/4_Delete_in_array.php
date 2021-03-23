<?php 
$title = "Supprimer dans un tableau";
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
  <p>Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.</p>
  <p>$ x = tableau (1, 2, 3, 4, 5);</p><br>
  <h2>Français</h2>
  <p>Supprimez un élément du tableau PHP ci-dessus. Après avoir supprimé l'élément, les clés entières doivent être normalisées.</p>
  <p>$ x = tableau (1, 2, 3, 4, 5);</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-array-exercise-4.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     $x = array(1, 2, 3, 4, 5);
     //var_dump($x);
     echo "Affichage tableau origine";
     $array = "<table border=1 cellspacing=0 cellpading=0>";
          foreach($x as $key=>$val){
              $array .= "<tr><td><font color=blue> " .$key ." </td> <td> " .$val ." </font></td></tr>";     
          } 
          $array .="</table>";
          echo $array ."<br>";

     echo "Suppression entrée tableau";
     unset($x[array_search(3, $x)]);

     $array2 = "<table border=1 cellspacing=0 cellpading=0>";
          foreach($x as $key2=>$val2){
              $array2 .= "<tr><td><font color=blue> " .$key2 ." </td> <td> " .$val2 ." </font></td></tr>";     
          } 
          $array2 .="</table>";
          echo $array2 ."<br>";
     
     echo "Nettoyage des clés";
     sort($x);
     $array3 = "<table border=1 cellspacing=0 cellpading=0>";
          foreach($x as $key3=>$val3){
              $array3 .= "<tr><td><font color=blue> " .$key3 ." </td> <td> " .$val3 ." </font></td></tr>";     
          } 
          $array3 .="</table>";
          echo $array3;
     
     
     
     //var_dump($tab);      
     ?>
  </body>
</html>
