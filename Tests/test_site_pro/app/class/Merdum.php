<?php

class Merdum {
    public $string = "Hello world!";
    public static $str = "peek a boo";
    private $txt = "Aloha bouana!";

    public function getString() {
        return $this->string;
    }

    static function getStr() {
        return self::$str;
    }

    function getTxt(){
        return $this->txt;
    }

    public function setString($s) {
        return $this->string=$s;
    }
        
}