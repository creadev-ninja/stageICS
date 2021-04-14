<?php
include('_connexion.php');
/*
    La logique est simple : 
    On séléctionne les éditeurs de type Périodique dans la table editors.
    On fait une boucle et 
        pour chaque ID (old) de editors (id_revue) on recherche la même ID dans periodicList (idrevue)
        et à chaque fois qu'on la trouve on ajoute l'ID (new) correspondante de editors (editorsID) 
        dans la nouvelle colonne de periodicList (idEditors)     
*/

$resp = $conn->query("SELECT `editorsID`, `idrevue`, `name`, `type` FROM `editors` WHERE `type`='P'");

while($data = $resp->fetch()){
    $sql = "UPDATE `periodiclist` 
            SET `idEditors` = ".$data['editorsID']." 
            WHERE `id_revue` = ".$data['idrevue'];
    //$data2 = $conn->query($sql);
}

/*
    evidemment on ne fait ce processus qu'un fois.
    Après avoir vérifié si les ID correspondent,
    vous pouvez supprimer la colonne id_revue de editors
    et la colonne idrevur de periodicList
*/