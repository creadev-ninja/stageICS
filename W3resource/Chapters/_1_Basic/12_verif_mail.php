<?php 
$title = "Vérification d'email";
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
  <p>Write a simple PHP program to check that emails are valid. </p>
  <p>Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.<br>Note : The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RFC5321. </p><br>
  <h2>Français</h2>
  <p>Ecrivez un programme PHP simple pour vérifier que les e-mails sont valides.</p>
  <p>Conseils : utilisez le filtre FILTER_VALIDATE_EMAIL qui valide la valeur en tant qu'adresse e-mail.<br>Remarque: La documentation PHP ne dit pas que FILTER_VALIDATE_EMAIL doit passer le RFC5321.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-12.php">Go To <?php echo $title ?></a> 
  </div>
     <?php

          $email_a = 'joe@example.com';
          $email_b = 'bogus';

          if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
               echo "L'adresse email '$email_a' est considérée comme valide.";
          }
          if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
               echo "L'adresse email '$email_b' est considérée comme valide.";
          } else {
               echo "L'adresse email '$email_b' est considérée comme invalide.";
          }

          $email = "abc123@sdsd.com"; 
          $regex = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/'; 
          if (preg_match($regex, $email)) {
               echo $email . " is a valid email. We can accept it.";
          } else { 
               echo $email . " is an invalid email. Please try again.";
          }

     ?>
     
   
  </body>
</html>

