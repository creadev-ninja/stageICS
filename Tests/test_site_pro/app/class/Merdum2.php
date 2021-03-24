<?php

class Merdum2 {
     public $string = "2 - Hello world!";
     public static $str = "2 - peek a boo";
     private $txt = "2 - Aloha bouana!";

     public function __get($prop) {
          return $this->$prop;
     }

     public static function showStatic(){
          return self::$str;
     }

     public function __set($prop, $val) {
          $this->$prop=$val;
     }

     public static function setStatic($str, $strVal){
          self::$str=$strVal;
     }

    
        
}
