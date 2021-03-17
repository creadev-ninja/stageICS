<?php 
$title = "Sommaire Memo Php";
$titleEn = "summary memo php";

$summary = 'Chapters/';
$chapters = scandir($summary);
var_dump($chapters);
print_r($chapters);
//$sumPages = 'Chapters/_1_Basic';
//$pages = scandir($sumPages);
//var_dump($pages);
//print_r($pages);

//$chapters = scandir (__DIR__);
//var_dump($chapters);
//print_r($chapters);
?>

<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>


  <body>
  <h1><?php echo $title ?></h1>
  <div>
  <h2><?php echo $titleEn ?></h2>
  <a href="https://www.w3resource.com/php-exercises/">Go To More Help</a>
  
  <!--</div>
     <div>
          <ul>
               <li><a href=""></a>
                    <ul>
                         <li><a href=""></a></li>
                    </ul>
               </li>
               </li>
          </ul>
     </div>-->
       
     <?php 
     
        
     foreach($chapters as $key => $chapter){
        if('.' !== $chapter && '..' !==$chapter){
          //    $pagesPath = 'Chapters/' . $chapter;
          //    $pages = scandir($pagesPath);
     foreach($pages as $keyp => $page){
         if('.' !== $page && '..' !==$page){
           echo "<ul><li><a href=\"\">" .$page ."</a></li></ul>" ."<br>";
         }
     }
         echo "<ul><li><a href=\"\">" .$chapter ."</a></li></ul>" ."<br>";
        }
     }
    
     ?>
   
  </body>
</html>

