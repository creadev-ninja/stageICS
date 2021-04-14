<?php
$host = 'localhost';
$dbname = 'bormantest2';
$dbuser = 'root';
$dbpass = '';

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
}catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}
