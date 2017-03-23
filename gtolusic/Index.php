<?php

function plus() {
    
 
$a=5;
$b=5.5;
$c= $a + $b;

        var_dump($c);

      }
      
      plus();
      
      function minus() {
    
 
$a=5;
$b=5.5;
$c= $a - $b;

        var_dump($c);

      }
      
      minus();
      
      function puta() {
    
 
$a=5;
$b=5.5;
$c= $a * $b;

        var_dump($c);

      }
      
      puta();
      
      function kroz() {
    
 
$a=5;
$b=5.5;
$c= $a / $b;

        var_dump($c);

      }
      
      kroz();
      
      function posto() {
    
 
$a=5;
$b=5.5;
$c= $a + $b;

        var_dump($c);

      }
      
      posto();
      ?>
<br>
<?php
      
      
   $indexarray = array ("Goran", "Tolusic", "Djakova");
           echo "Ja se zovem " .$indexarray[0].", prezivam se " .$indexarray[1].", dolazim iz " .$indexarray[2].".";
      ?>
<br>
<?php
           $indexarray2 = array ("1"=>"Goran", "2" =>"Tolusic", "3"=>"Djakova");
      echo "Ja se zovem " .$indexarray2[1].", prezivam se " .$indexarray2[2].", dolazim iz " .$indexarray2[3].".";
?>
<br>
<?php

$indexarray3 = array ("Goran", "Tolusic", "Djakova");
echo "Ja se zovem " .$indexarray3[0]. " i dolazim iz " .$indexarray[2]. ". ";
print_r (array_values($indexarray3));
echo count($indexarray3);
?> 
<br>
<?php

$ime="Ivo";
 $prezime="Anic";

        echo "Dobar dan ".$ime.", jeli vase prezime ".$prezime."?";
         echo strlen("Dobar dan ".$ime.", jeli vase prezime ".$prezime."?");
        
        

?>

