<?php 
$title = "Following components of the url";
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
  <p>Write a PHP script, which will return the following components of the url</p>
  <p>A computer file is a computer resource on a computer that stores data, information, picture, video, settings, or commands used with a computer program. In a graphical user interface an operating system displays a file as an icon.</p><br>
  <h2>Français</h2>
  <p>Écrivez un script PHP pour obtenir le nom du fichier actuel.</p>
  <p>Un fichier informatique est une ressource informatique sur un ordinateur qui stocke des données, des informations, une image, une vidéo, des paramètres ou des commandes utilisées avec un programme informatique. Dans une interface utilisateur graphique, un système d'exploitation affiche un fichier sous forme d'icône.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-7.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
     //var_dump($GLOBALS); 
     //var_dump($_SERVER);
     //var_dump($_SERVER['PHP_SELF']);

     //$current_file_name = basename($_SERVER['PHP_SELF']);
     //echo $current_file_name."\n";
    
     $url = $_SERVER['HTTP_REFERER'];
     //$url = $_SERVER['SERVER_PROTOCOL'];
     var_dump($url);
     $comps = parse_url($url);
     var_dump($comps);
     echo "Scheme : " .$comps['scheme']."\r\n"."<br>";
     echo "Host : " .$comps['host']."\r\n"."<br>";
     echo "Path : " .$comps['path']."\r\n"."<br>";

     //var_dump(__FILE__);
/*
     $url = $_SERVER['PHP_SELF'];
     var_dump(parse_url($url, PHP_URL_SCHEME));
     var_dump(parse_url($url));
     var_dump(parse_url($url, PHP_URL_SCHEME));
     var_dump(parse_url($url, PHP_URL_USER));
     var_dump(parse_url($url, PHP_URL_PASS));
     var_dump(parse_url($url, PHP_URL_HOST));
     var_dump(parse_url($url, PHP_URL_PORT));
     var_dump(parse_url($url, PHP_URL_PATH));
     var_dump(parse_url($url, PHP_URL_QUERY));
     var_dump(parse_url($url, PHP_URL_FRAGMENT));


     if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
          echo 'HTTPS';
     }else{
               echo 'HTTP';
     }
     echo '<hr>';
     var_dump($_SERVER);
*/

     ?>
     
   
  </body>
</html>

