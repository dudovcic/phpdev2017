<?php
function zbroj ($a, $b) {
    
    $c=$a+$b;
    echo $c;
    echo "<br>";
}
zbroj(3,4);
function minus ($a, $b) {
    
    $c=$a-$b;
    echo $c;
    echo "<br>";
}
minus(3,4);
function puta ($a, $b) {
    
    $c=$a*$b;
    echo $c;
    echo "<br>";
}
puta(3,4);
function kroz ($a, $b) {
    
    $c=$a/$b;
    echo $c;
    echo "<br>";
}
kroz(3,4);
function sve($a,$b) {
    
    $c= zbroj($a, $b);
    echo $c;
    
     $d=minus($a,$b);
     echo $d;
     
        $e=puta($a,$b);
     echo $e;
    
      $f=kroz($a,$b);
     echo $f;
     
     
}
sve(6,7)
?>