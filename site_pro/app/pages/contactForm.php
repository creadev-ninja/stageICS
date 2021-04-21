<?php
// récupération des _POST
if(isset($_POST['nom'])) {
     $nom = htmlspecialchars( $_POST['nom']);
     
}else{
     $nom = "";
}

if(isset($_POST['prenom'])) {
     $prenom = htmlspecialchars( $_POST['prenom']);
     
}else{
     $prenom = "";
}

if(isset($_POST['societe'])) {
     $societe = htmlspecialchars( $_POST['societe']);
     
}else{
     $societe = "";
} 

if(isset($_POST['tel'])) {
     $tel = htmlspecialchars( $_POST['tel']);
     
}else{
     $tel = "";
}

if(isset($_POST['mail'])) {
     $mail = htmlspecialchars( $_POST['mail']);
     
}else{
     $mail = "";
}

if(isset($_POST['objet'])) {
     $objet = htmlspecialchars( $_POST['objet']);
     
}else{
     $objet = "";
} 

if(isset($_POST['message'])) {
     $message = htmlspecialchars( $_POST['message']);
     
}else{
     $message = "";
} 

// vérifier les vides  des _POST
$errorText = "";
if(!empty($nom) && !empty($mail) && !empty($objet) && !empty($message)){
     $post = ['nom'=>$nom, 'prenom'=>$prenom, 'societe'=>$societe, 'tel'=>$tel, 'mail'=>$mail, 'objet'=>$objet, 'message'=>$message];
     //instenciation de la class ContactForm
     $cf = new ContactForm;
     $cf -> cfGetPost($post);
}else{
     $errorText = "un ou plusieurs éléments sont manquants";
}



/*
$errorText = "";

if(empty($nom)){
     $errorText .=  "manque Nom<br>";
}

if(empty($mail)){
     $errorText .=  "manque Mail<br>";
}

if(empty($objet)){
     $errorText .=  "manque Objet<br>";
}

if(empty($message)){
     $errorText .= "manque Message<br>";
}


echo "Nom : " .$nom ."<br>";
echo "prenom : " .$prenom ."<br>";
echo "societe : " .$societe ."<br>";
echo "tel : " .$tel ."<br>";
echo "mail : " .$mail ."<br>";
echo "objet : " .$objet ."<br>";
echo "message : " .$message ."<br>";
*/


