
<html>
    <head>
        <title>Php</title>
            
    </head>
    
    <body>
 <?php
//pomocu vrijednosti
 function zbroj($a,$b)
 {
     return $a+$b;
 }
 $i=5;
 $j=6;
 echo zbroj($i,$j);
 echo "<br>";
 
 
 
 //global komanda
 $a=30;
 $b=6;
 function dij($a,$b)
 {
     global $a;
     global $b;
     return $a/$b;
 }
echo dij($a,$b);
echo "<br>";

//putem reference
 
function razli(&$a , &$b)
{
    $a=25;
    $b=15;
    echo $a-$b;
    
}
   echo razli($a,$b);
   echo "<br>";
   echo "<br>";
   
   
// static
   
function mno($i,$j)
{
   static $i=4;
   $i++;
   return $i+$j;
   
 

   
     
      
}
$i=4;
$j=5;

 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo mno($i,$j);echo"<br>";
 echo "<br>";
 ?>
    
        
    </body>
</html>