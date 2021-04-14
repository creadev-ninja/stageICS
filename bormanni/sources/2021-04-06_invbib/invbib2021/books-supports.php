<?php
include('_connexion.php');
/*
    on transfère les données des colonnes (livre, ebook, papier, magazine, cdrom)
    dans la table relationnelle books_supports_rel
*/
$query = "SELECT `booksID`, `livre`, `ebook`, `papier`, `magazine`, `cdrom` FROM `books`";
$resp = $conn->query($query);

while($data = $resp->fetch()){
    // on place le début de la requête d'insertion
    $sql= "INSERT INTO `books_supports_rel` (`idbooks`,`idsupports`) VALUES ";
    // on la complète avec des tests
    // les valeur 1,2,3,4 sont les ID(s) de la table collections
    $cid = $data['booksID']; 
    if($data['livre'] == 'Y'){    $sql .= "($cid, 1),";  $a=1;}else{$a=0;}
    if($data['ebook'] == 'Y'){    $sql .= "($cid, 10),"; $b=1;}else{$b=0;}
    if($data['papier'] == 'Y'){   $sql .= "($cid, 16),"; $c=1;}else{$c=0;}
    if($data['magazine'] == 'Y'){ $sql .= "($cid, 2),";  $d=1;}else{$d=0;}
    if($data['cdrom'] == 'Y'){    $sql .= "($cid, 8),";  $e=1;}else{$e=0;}
    // On contrôle que la requête a été complèté
    if($a+$b+$c+$d+$e > 0){
        // on enlève la dernière virgule
        $sql = substr($sql, 0, -1).';';
        var_dump($sql);
        //$data2 = $conn->query($sql); 
    }
    
}