<?php 
$title = "trier trableau";
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
  <h2>Anglais</h2>
  <p>Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.</p>
  <p>$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;</p><br>
  <h2>Français</h2>
  <p>Créez un script PHP qui affiche la capitale et le nom du pays à partir du tableau $ ceu ci-dessus. Triez la liste par capitale du pays.</p>
  <p>$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;</p><br>
  <a href="https://www.w3resource.com/php-exercises/php-array-exercise-3.php">Go To <?php echo $title ?></a> 
  </div>
     <?php 
     $ceu = array ("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Bruxelles", "Denmark" => "Copenhague", "Finland" => "Helsinki "," France "=>" Paris "," Slovakia "=>" Bratislava "," Slovénie "=>" Ljubljana "," Germany "=>" Berlin "," Greece "=>" Athènes "," Irlande " => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbonne", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "Londres "," Chypre "=>" Nicosie "," Lituanie "=>"Vilnius "," République tchèque "=>" Prague "," Estonie "=>" Tallin "," Hongrie "=>" Budapest "," Lettonie "=>" Riga "," Malte "=>" La Valette "," Autriche "=>" Vienne "," Pologne "=>" Varsovie ");
     //var_dump($ceu);
     foreach($ceu as $state => $city){
          $clean [trim($state)] = trim($city);
     }
     //var_dump($clean);
     asort($clean);
     var_dump($clean);
     $cpt = 0;
     foreach ($clean as $key => $val) {
          //echo "$key = $val\r\n <br>";
          $tab [$cpt] = [$key, $val];
          echo "The capital of " .$tab[$cpt][0] ." is " .$tab[$cpt][1] ."\r\n <br>";
          $cpt++; //ou $cpt = $cpt+1 ou 2 ou 3..., selon le pas à faire
     }
     
     
     //var_dump($tab);      
     ?>
  </body>
</html>
