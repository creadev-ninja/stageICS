<?php
require_once("../app/class/Autoloader.php");
Autoloader::register();

$co = new Pagemaker;
$co->pmMakePage();

//C:\xampp\htdocs\projets\CREA_DEV\site_pro\app\pages
/*
$name = 'home';
var_dump($_SERVER['DOCUMENT_ROOT'].'/app/pages/'.$name.'.php');
//Test router
$rt = new Router;
$str = $rt->getUrl();
echo "Router getUrl() \r\n <br>";
var_dump( $str);
echo "<hr>";
//var_dump($_SERVER);
//var_dump($_GET);
echo "Router parseUrl() \r\n <br>";
$url = $rt->parseUrl();
var_dump($url);
echo "<hr>";

echo "Pagemaker pmGetArUrl() \r\n <br>";
$pmRt = new Pagemaker;
$pmRt->pmGetArUrl();
var_dump($pmRt);
echo "<hr>";*/


