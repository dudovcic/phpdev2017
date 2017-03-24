<?php

//prvi zadatak
$a= (int) 5;
$b= (double) 6.5;
$c= (double) ($a * $b) + ($a / $b) - ($a % $b);
        echo $c;

  echo "<br>";
    
  //indexirani array
   $indexarray = array ("Goran", "Tolusic", "Djakovo");
   
                 echo "<br>";
                 
                 //associjativni array
                 
           $indexarray2 = array ("1"=>"Goran", "2" =>"Tolusic", "3"=>"Djakovo");
    
           echo "<br>";
           
           //pojedini članovi arraya
           
echo $indexarray2 ["1"];

echo "<br>";

echo $indexarray2 ["3"];

echo "<br>";

//print cijelog arraya

echo print_r ($indexarray);

echo "<br>";

echo print_r ($indexarray2);

echo "<br>";
//duljina arraya

echo count($indexarray);

echo "<br>";

echo count($indexarray2);

echo "<br>";

//varijable ime i prezime i duljina stringa ispod
$ime="Goran";
 $prezime="Tolusic";
 $recenica="Dobar dan ".$ime.", jeli vase prezime ".$prezime."?";
 echo $recenica;
 echo "<br>";

 echo strlen ($recenica);

 ?>