<?php
include('_connexion.php');

$resp = $conn->query("SELECT `editorsID`, `idrevue`, `name`, `type` FROM `editors` WHERE `type`='P'");
$out = "<table border='1'>\r\n<tr><th>new</th><th>old</th><th>Name</th></tr>";
while($data = $resp->fetch()){
   $out .= "<tr>\r\n\t<td>". $data['editorsID'] .'</td>'
                    .'<td>'. $data['idrevue'].'</td>'
                    .'<td>'. $data['name']."</td></tr>\r\n";
}
$out .= "</table>\r\n";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Affichage de <em>Editors</em></h1>
    <p>On affiche les ID(s) nouvellement créées pour les revues (new), ainsi que les anciennes id des revues (old) et leur nom.</p>
    <p>On peut ainsi voir la correspondance entre les nouvelles et les anciennes ID(s).</p>
    <?php echo $out;?>
</body>
</html>


