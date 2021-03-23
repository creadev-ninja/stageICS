<?php

class Autoloader{

     static function register(){
          //var_dump(spl_autoload_register(array(__CLASS__, 'autoload')));
          spl_autoload_register(array(__CLASS__, 'autoload'));
     }

     static function autoload($cls){
          //var_dump(require_once('class/'.$cls .'.php'));
          require_once('../app/class/'.$cls .'.php');
     }
     
}