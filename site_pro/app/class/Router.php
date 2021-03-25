<?php

class Router{
     protected $url;
     protected $localDos;
     protected $path0;
     
     /*
     public function __construct(){
          $this->url = $this->getUrl();
     }*/

     public function __construct($refUrl=false){
          if($refUrl==true && $this->urlValid($refUrl)==true) {
               $this->url = $refUrl;
          }else{
               $this->url = $this->getUrl();
          }     
     }

     public function getUrl(){
          $scheme = $_SERVER['REQUEST_SCHEME'];
          $host = $_SERVER['HTTP_HOST'];
          $uri = $_SERVER['REQUEST_URI'];
          $path = $_SERVER['PHP_SELF'];
          $query = " ";

          $cpt = 0;
          foreach($_GET as $keyG => $valueG){
               if($cpt=0){
                    $et = "?";
               }else{
                    $et = "&";
               }

               $query .= $et;
               $query .= $keyG;
          
               if(isset($valueG)){
                    $query .= "=" .$valueG;
               }    
          }

          return $scheme .'://' .$host .$path .$query;
          //return $scheme .'://' .$host .$uri; 
          //echo $query;
     }

     public function parseUrl($url=false){
          if($url == false){
               $url= $this->url;
          }
          $arrUrl = parse_url($url);
          $curtPage = explode('/', $arrUrl['path']);
          $pageId = sizeof($curtPage) -1;

          if($curtPage[0]==''){unset($curtPage[0]);}
          

          $arrUrl ['page'] = $this->urlCleaner($curtPage[$pageId]);

          unset($curtPage[$pageId]);
          unset($curtPage[$pageId-1]);

         

          if($arrUrl['host']=='localhost' || $arrUrl['host']=='127.0.0.1'){
               $this->localDos = $curtPage[1];
               $arrUrl['localDos'] = $curtPage[1];
               unset($curtPage[1]);
          }
          
          $pathZero = '';
          if(sizeof($curtPage)>0){
               $pathZero = '/';
               $cpt =1;
               foreach($curtPage as $cpVal){
                    $arrUrl ['path' .$cpt] = $cpVal;
                    $pathZero .=$cpVal .'/';
                    $cpt++;
               }
          }
          $this->path0 = $pathZero;
          $arrUrl['path0'] = $pathZero;
          
          //return $curtPage;
          return $arrUrl;
     }

     public function urlValid($subject=false){
          /*$pattern = '/((http|https)\:\/\/)?[a-zA-Z0-9\.\/\?\:@-=#]+.([a-zA-Z0-9&./?:@-=#])*//*';
          $filter = preg_match($pattern, $subject, $unVal);
          return ($filter != 0 || $filter != false) ? true : false;*/

          $filter = filter_var($subject, FILTER_VALIDATE_URL);
          return $filter;

     }

     public function urlCleaner($dirty){
          $strSearch = array('index.php &path=', 'index.php&path=', 'index.php?path=','index.php ?path=');
          
          for($nt=0; $nt<sizeof($strSearch); $nt++){
               $clean = str_replace($strSearch, '', $dirty, $count);
               if ($count>0){break;}
          }

          return $clean; 
     }
}