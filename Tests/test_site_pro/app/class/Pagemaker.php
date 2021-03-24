<?php

class Pagemaker extends Router{

     protected $pmArUrl;

     public function __construct(){
          parent::__construct();
          $this->pmArUrl = $this->parseUrl();
     }

     public function pmGetArUrl(){
          return $this->pmArUrl;
     }

     public function pmMakePage(){

          if($this->pmArUrl['page'] == 'index.php'){
               $p = 'home';
          }else{
               $p = $this->pmArUrl['page'];
          }

          $content='';
          ob_start();
          if($this->localDos != ''){
               $base = '/' .$this->localDos .'/';
          }else{
               $base = $this->path0;
          };
          require($_SERVER['DOCUMENT_ROOT'] .$base .'/app/pages/'.$name .'php');
          $content .= ob_get_clean();
          require($_SERVER['DOCUMENT_ROOT'] .$base .'/app/pages/templates/default.tpl.php');

     }

}