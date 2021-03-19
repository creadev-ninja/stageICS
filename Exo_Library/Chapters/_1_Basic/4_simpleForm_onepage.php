<?php 
$title = "HTML form";
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
  <p>Create a simple HTML form and accept the user name and display the name through PHP echo statement.</p>
  <p>A webform or HTML form on a web page allows a user to enter data that is sent to a server for processing. Forms can resemble paper or database forms because web users fill out the forms using checkboxes, radio buttons, or text fields. For example, forms can be used to enter railway or credit card data to purchase a product, or can be used to retrieve search results from a search engine.</p><br>
  <h2>Français</h2>
  <p>Créez un formulaire HTML simple et acceptez le nom d'utilisateur et affichez le nom via une instruction d'écho PHP.</p>
  <p>un formulaire Web ou un formulaire HTML sur une page Web permet à un utilisateur de saisir des données qui sont envoyées à un serveur pour traitement. Les formulaires peuvent ressembler à des formulaires papier ou de base de données, car les utilisateurs Web remplissent les formulaires à l'aide de cases à cocher, de boutons radio ou de champs de texte. Par exemple, les formulaires peuvent être utilisés pour saisir des données de chemin de fer ou de carte de crédit pour acheter un produit, ou peuvent être utilisés pour récupérer des résultats de recherche à partir d'un moteur de recherche.</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-basic-exercise-4.php">Go To <?php echo $title ?></a> 
  </div>
       
     <form method="POST">
     <div>
        <label for="name">Please input your name :</label>
        <input type="text" id="name" name="user_name">
        <button type="submit">Envoyer</button>
    </div>  
     
     </form>

     <?php 
     $name = $_POST['user_name'];
    //var_dump($_POST);
    //var_dump($_REQUEST);  
    //var_dump($name);
     echo "<h3> Hello " .$name ."</h3>";    
     ?> 
   
  </body>
</html>

