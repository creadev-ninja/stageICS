<?php 
$title = "http ou https";
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
  <p>Write a PHP script, to check whether the page is called from 'https' or 'http'.</p>
  <p>HTTP Secure (HTTPS) is an extension of the HTTP for secure communication over a computer network, and is widely used on the Internet. In HTTPS, the communication protocol is encrypted using Transport Layer Security (TLS), or formerly, its predecessor, Secure Sockets Layer (SSL). The protocol is therefore also often referred to as HTTP over TLS, or HTTP over SSL.</p><br>
  <h2>Français</h2>
  <p>Ecrivez un script PHP, pour vérifier si la page est appelée depuis 'https' ou 'http'.</p>
  <p>HTTP Secure (HTTPS) est une extension du HTTP pour la communication sécurisée sur un réseau informatique, et est largement utilisé sur Internet. En HTTPS, le protocole de communication est chiffré à l'aide de Transport Layer Security (TLS), ou anciennement, son prédécesseur, Secure Sockets Layer (SSL). Le protocole est donc souvent appelé HTTP sur TLS ou HTTP sur SSL.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-10.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
          if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
               echo 'HTTPS';
          }else{
               echo 'HTTP';
          }
          echo '<hr>';

          //var_dump($_SERVER);
          //var_dump($_SERVER['HTTPS']);
          //var_dump($_SERVER['HTTP']);       

     ?>
     
   
  </body>
</html>

