

<html>
    <head>
        <title>Php</title>        
    </head>
    <body>
 
     <?php
     

//static
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
    
  static $a;
  $a++;
   
    echo sum($a,$b); echo "<br>";
    echo razlika($a,$b); echo "<br>";
    echo mnozina($a,$b); echo "<br>";
    echo dijel($a,$b); echo "<br>";
}
$i=9;
$j=3;
 
all($i,$j);
all($i,$j);
all($i,$j);
echo"<br>";

//global

$i=9;
        function su($a,$b)
{
      return $a+$b;  
}
function raz($a,$b)
{
      return $a-$b;  
}
function mnoz($a,$b)
{
      return $a*$b;  
}
function dij($a,$b)
{
      return $a/$b;  
}
function sve($a,$b)
{
    global $i;
    echo su($a,$b); echo "<br>";
    echo raz($a,$b); echo "<br>";
    echo mnoz($a,$b); echo "<br>";
    echo dij($a,$b); echo "<br>";
}


$j=3;
 
sve($i,$j);
sve($i,$j);
sve($i,$j);
echo"<br>";


    ?>
    </body>  
</html>