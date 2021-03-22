<?php

class Router{

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


}