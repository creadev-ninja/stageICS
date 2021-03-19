<?php 
$title = "Detect Navigation";
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
  <p>Write a simple PHP browser detection script.</p>
  <p>A web browser is a software application for accessing information on the World Wide Web. Each individual web page, image, and video is identified by a distinct URL. These URLs, enable browsers to retrieve and display them on the user's device. A web browser is not the same thing as a search engine, though the two are often confused. For a user, a search engine is just a website, such as google.com, that stores searchable data about other websites. But in order to connect to and display websites on their device, a user needs to have a web browser installed.</p><br>
  <h2>Français</h2>
  <p>Rédigez un simple script de détection de navigateur PHP.</p>
  <p>un navigateur Web est une application logicielle permettant d'accéder à des informations sur le Web. Chaque page Web, image et vidéo est identifiée par une URL distincte. Ces URL permettent aux navigateurs de les récupérer et de les afficher sur l'appareil de l'utilisateur. Un navigateur Web n'est pas la même chose qu'un moteur de recherche, bien que les deux soient souvent confondus. Pour un utilisateur, un moteur de recherche n'est qu'un site Web, tel que google.com, qui stocke des données interrogeables sur d'autres sites Web. Mais pour se connecter et afficher des sites Web sur leur appareil, un utilisateur doit avoir un navigateur Web installé.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-6.php">Go To <?php echo $title ?></a> 
  </div>
     <?php
     //var_dump($GLOBALS); 
     //var_dump($_SERVER);
     //var_dump($_HTTP);
     echo $_SERVER['HTTP_USER_AGENT'];
//   $nav = getenv('HTTP_USER_AGENT');
//   var_dump($nav);
//   $nav = $_SERVER['HTTP_USER_AGENT'];
//   var_dump($nav);
     //var_dump($_SERVER['HTTP_USER_AGENT']);
     echo "COMSPEC";
     var_dump($_SERVER['COMSPEC']);
     echo "windir";
     var_dump($_SERVER['WINDIR']);

     ?>
     
   
  </body>
</html>

