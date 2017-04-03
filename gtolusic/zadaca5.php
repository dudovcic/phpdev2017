<?php

$a=2;
$b=3;
$c=0;

//predaja putem reference
function zbroj (&$a, &$b) {
    
    
    $c=$a+$b;
    echo $c;
    echo "<br>";
        
}
zbroj($a, $b);


//predaja putem vrijednosti
function minus ($a, $b) {
    
  $c= $a-$b;
  echo $c;
  echo "<br>";
  
}
minus(27,35);


//global
function kroz ($a, $b) {
    
    global $c;
    $c=$a/$b;
    echo $c;
    echo "<br>";
}
kroz($a,$b);

function puta ($a, $b) {
    
    $c=$a*$b;
    echo $c;
    echo "<br>";
}
puta($a,$b);



echo "<hr>";
function sve($a,$b) {
    
    $c= zbroj($a, $b);
    echo $c;
    
     $d=minus($a,$b);
     echo $d;
     
     $f=kroz($a,$b);
     echo $f;
     
        $e=puta($a,$b);
     echo $e;
    
      
     
}
sve(5,6)
?>