<?php
require_once("class/Autoloader.php");
Autoloader::register();

/*Test router*/
$rt = new Router;
$str = $rt->getUrl();
var_dump( $str);
echo "<hr>";
//var_dump($_SERVER);
//var_dump($_GET);
$url = $rt->parseUrl();
var_dump($url);
echo "<hr>";