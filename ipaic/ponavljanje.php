<?php
$a=5.0;
$b=6.0;
$razlika=0;

function sum($c,$d)
{
   return $c+$d;
}
echo sum($a,$b);
function razlika($e,$f)
{
    global $razlika;
    $razlika=$e-$f;
}
razlika($a,$b);
echo "<br>";
echo $razlika;
function djeljenje(&$g,&$h)
{   
    $g=$g/$h;
}
djeljenje($a,$b);
echo "<br>";
echo $a;
function umnozak($m)
{
    static $z=1;
    echo "<br>";
    $z=$z*$m;
    echo $z;
    
}
umnozak(5);
umnozak(10);
umnozak(4);
umnozak(0);





