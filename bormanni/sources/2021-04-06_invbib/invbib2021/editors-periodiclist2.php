<?php
include('_connexion.php');

$resp = $conn->query("SELECT `periodicListID`, `idEditors`, `id_revue`, `issue`, `yearPub`,`title`  FROM `periodicList` WHERE 1");
$out = "<table border='1'>\r\n<tr><th>id</th><th>new</th><th>old</th><th>N°</th><th>Year</th><th>Title</th></tr>";
while($data = $resp->fetch()){
   $out .= "<tr>\r\n\t<td>". $data['periodicListID'] .'</td>'
                    .'<td>'. $data['idEditors'].'</td>'
                    .'<td>'. $data['id_revue'].'</td>'
                    .'<td>'. $data['issue'].'</td>'
                    .'<td>'. $data['yearPub'].'</td>'
                    .'<td>'. $data['title']."</td></tr>\r\n";
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
    <h1>Affichage de <em>periodicList</em></h1>
    <p>On ajoute à la table la colonne <em>idEditors</em> qui recceuille les onouvelles ID(s).</p>
    <p>Pour cette opération on garde les anciennes ID(s) de la colonne <em>id_revue</em>.</p>
    <?php echo $out;?>
</body>
</html>