<?php
 $a=2;
 
 function inc_a()
 {
     global $a;
     $a++;
     echo $a;
        
 }
 
inc_a();
echo $a;


function inc_b()
{
    static $a = 0;
    $a++;
    echo $a;
}
inc_b();
inc_b();
inc_b();

echo "<br>";

function sum($a,$b)
{
      return $a+$b;  
}
function razlika($a,$b)
{
      return $a-$b;  
}
function mnozina($a,$b)
{
      return $a*$b;  
}
function dijel($a,$b)
{
      return $a/$b;  
}
function all($a,$b)
{
    echo sum($a,$b);
    echo razlika($a,$b);
    echo mnozina($a,$b);
    echo dijel($a,$b);
}
$i=6;
$j=3;
 
all($i,$j);



?>