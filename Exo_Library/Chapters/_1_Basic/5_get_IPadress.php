<?php 
$title = "Get the client IP address";
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
  <p>Write a PHP script to get the client IP address</p>
  <p>IP address: An Internet Protocol address (IP address) is a numerical label assigned to each device connected to a computer network that uses the Internet Protocol for communication. An IP address serves two principal functions: host or network interface identification and location addressing.</p><br>
  <h2>Français</h2>
  <p>Écrivez un script PHP pour obtenir l'adresse IP du client.</p>
  <p>Adresse IP: une adresse de protocole Internet (adresse IP) est une étiquette numérique attribuée à chaque appareil connecté à un réseau informatique qui utilise le protocole Internet pour la communication. Une adresse IP remplit deux fonctions principales: l'identification de l'hôte ou de l'interface réseau et l'adressage de l'emplacement.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-5.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
      // var_dump($GLOBALS); 
      // var_dump($_SERVER); 
      echo $_SERVER['REMOTE_ADDR'];
      var_dump($_SERVER['REMOTE_ADDR']);
      echo $_SERVER['SERVER_NAME'];
      var_dump($_SERVER['SERVER_NAME']);
     ?>
     
   
  </body>
</html>

