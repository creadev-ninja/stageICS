<?php
//require("class/Test.php");
//require("class/Test2.php");
require_once("class/Autoloader.php");
Autoloader::register();

//Classe et Méthodes classiques
$tst = new Merdum;

//Méthode public
$txt = $tst->getString();
//$txt = Merdum::getString();
echo "PUBLIC <br>" .$txt ."<br>";
var_dump($txt);
echo "<hr>";

//Méthode Static
$tst = new Merdum;
$x = $tst::getStr();
echo "PUBLIC STATIC <br>" .$x ."<br>";
echo "TXT <br>";
var_dump($tst);
echo "X <br>";
var_dump($x);
echo "<hr>";

//Méthode Public set
$x = $tst->setString("Aloha !");
echo "PUBLIC SET <br>" .$x ."<br>";
var_dump($x);
echo "<hr>";

//Méthode Private
$x1 = $tst->getTxt();
echo "PRIVATE <br>" .$x1 ."<br>";
var_dump($x1);
echo "<hr>";

//Méthodes magiques
echo "Fonction magic __get __set<br><br>";
$m = new Merdum2;

echo "public <br>";
$m1 = $m->__get("string");
echo $m1 ."<br>";
$ms1 = $m->__set("string", "2 - Benvenuti");
$mg1 = $m->__get("string");
echo $mg1 ."<br>";
echo "<br>";

echo "public static <br>";
$m2 = $m::showStatic();
echo $m2 ."<br>";
$ms2 = $m->setStatic("str", "2 - Asta la vista");
$mg2 = $m->showStatic();
echo $mg2 ."<br>";
echo "<br>";

echo "private <br>";
$m3 = $m->__get("txt");
echo $m3 ."<br>";
$ms3 = $m->__set("txt", "2 - Fightooo!!!");
$mg3 = $m->__get("txt");
echo $mg3 ."<br>";
echo "<br>";




