<?php
include('_connexion.php');
/*
    on transfère les données des colections (rare, collperso, colltechpaint, collantiart)
    dans la table relationnelle books_coll_rel
*/
$query = "SELECT `booksID`, `rare`, `collperso`, `colltechpaint`, `collantiart` FROM `books`";
$resp = $conn->query($query);

while($data = $resp->fetch()){
    // on place le début de la requête d'insertion
    $sql= "INSERT INTO `books_coll_rel` (`idbooks`,`idcollections`) VALUES ";
    // on la complète avec des tests
    // les valeur 1,2,3,4 sont les ID(s) de la table collections
    $cid = $data['booksID']; 
    if($data['rare'] == 'Y'){          $sql .= "($cid, 1),"; $a=1;}else{$a=0;}
    if($data['collperso'] == 'Y'){     $sql .= "($cid, 2),"; $b=1;}else{$b=0;}
    if($data['colltechpaint'] == 'Y'){ $sql .= "($cid, 3),"; $c=1;}else{$c=0;}
    if($data['collantiart'] == 'Y'){   $sql .= "($cid, 4),"; $d=1;}else{$d=0;}
    // On contrôle que la requête a été complèté
    if($a+$b+$c+$d > 0){
        // on enlève la dernière virgule
        $sql = substr($sql, 0, -1).';';
        var_dump($sql);
        //$data2 = $conn->query($sql); 
    }
    
}