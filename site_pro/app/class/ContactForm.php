<?php

     class ContactForm {          
/*
         function cfPageContact(){  duplique la page
              $cfPage = new Pagemaker;
              return $cfPage->pmMakePage('[page]'); 
         }
*/

          public function cfGetPost($postCake){
               return $postCake;
          }

          public function cfVerifPost(){
               $string_model = "/^[A-Za-z0-9 .'-]+$/";
               $email_model = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
               $tel_model = '/ ^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/';
               $cfArPost = $this -> cfGetPost();

               $error_txt = "";

               if(!preg_match($string_model, $cfArPost['nom']) || !preg_match($string_model, $cfArPost['prenom']) || !preg_match($string_model, $cfArPost['societe']) || !preg_match($string_model, $cfArPost['prenom'])){

               }



          }

                    
}