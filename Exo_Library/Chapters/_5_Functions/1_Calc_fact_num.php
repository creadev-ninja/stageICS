<?php 
$title = "Fonction de calcul le factoriel d'un nombre";
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
  <p> Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument. </p>
  <p></p><br>
  <h2>Français</h2>
  <p>Écrivez une fonction pour calculer la factorielle d'un nombre (un entier non négatif). La fonction accepte le nombre comme argument.</p>
  <p></p><br>
  <a href="https://www.w3resource.com/php-exercises/php-function-exercise-1.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
        $cal = 1;
        for($c=1; $c<=5; $c++){
        $cal *= $c ;
        echo $c ."\r\n <br>";
        } 
        echo "calcul = " .$cal;
        echo "<hr>";
         
        function factoNumb($chiffre){
            var_dump($chiffre);
              if($chiffre == 0){
                return 1;
              }else{
                $facto = $chiffre * factoNumb($chiffre -1);
                return $facto;
               
              }
              
         }
         
        print_r( factoNumb(5));
        //var_dump(factoNumb(5));     
     ?>
  </body>
</html>
