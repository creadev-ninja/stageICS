<?php 
$title = "Nombre pemier";
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
          <p>Write a function to check whether a number is prime or not.</p>
          <p>Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.</p><br>
          <h2>Français</h2>
          <p>Écrivez une fonction pour vérifier si un nombre est premier ou non.</p>
          <p>Remarque: Un nombre premier (ou un nombre premier) est un entier naturel supérieur à 1 qui n'a pas de diviseurs positifs autres que 1 et lui-même.</p><br>
          <a href="https://www.w3resource.com/php-exercises/php-function-exercise-1.php">Go To <?php echo $title ?></a> 
     </div>
     <?php 
            
          function primeNumb($numb){
               $no = " N'EST PAS un nombre PREMIER";
               $yes = " EST un nombre PREMIER";
               
               //var_dump($numb);
               
               if(is_numeric($numb) && is_int($numb) && $numb > -1){
                    echo $numb ." est vérifiable.\r\n <br>";
                    $numbOk = $numb;
                    //echo $numbOk ." GOOD";
               }else{
                    echo $numb ." EST UNE MAUVAISE ENTREE \r\n <br>";
                    $numbOk = 0 ;
               }
                             
               $cpt =0;
               for($f=2; $f<=$numbOk; $f++){
                    $recup = $numbOk %$f;
                    //echo $numbOk ."/" .$f ."=" .$recup ."\r\n <br>";
                    if($recup == 0){
                         $cpt++;
                    }
                    //echo "compteur " ."= " .$cpt ."\r\n <br>";
               }
               if($cpt !== 1){
                    echo "le nombre " .$numb .$no ."\r\n <br>";
               }else{
                    echo "le nombre " .$numb .$yes ."\r\n <br>";
               }     
          }
         /*         
         print_r( primeNumb(2));
         echo "<hr>";
         print_r( primeNumb(1));
         echo "<hr>";
         print_r( primeNumb(0));
         echo "<hr>";
         print_r( primeNumb(3));
         echo "<hr>";
         print_r( primeNumb(-3));
         echo "<hr>";          
         print_r( primeNumb(22));
         echo "<hr>"; 
         print_r( primeNumb("a"));
         echo "<hr>";
         print_r( primeNumb(888));
         echo "<hr>";
         print_r( primeNumb(3767));
         echo "<hr>";*/

         for ($val = 0; $val <=100; $val++){
              print_r(primeNumb($val));
              echo "<hr>";
         }


         //TODO nettoyer $numb des espaces et autres signes non numérique pour récupération d'un formulaire.
               //preg_match_all('!\d+!',$numb, $numbN);
               //var_dump($numbN);

               /*
               if(!is_numeric($numb) && $numb <= 1 && !is_int($numb)){
                    //echo $yes;
                    for($f=2; $f<=$numb; $f++){
                         $cpt = 0;
                         if(){
                              $cpt++;
                              return $cpt;          
                         }
                    }
                    if($cpt == 0 ){
                         echo "le nombre " .$numb .$no;
                    }
               }else{
                    echo "le nombre " .$numb .$yes;
               }*/

          //var_dump(primeNumb(5)); 
          //$numT = 38756234;
          //echo $numT;
          //preg_match_all('!\d+!',$numT, $numTr);
          //print_r($numTr);

          
        
     ?>
  </body>
</html>
