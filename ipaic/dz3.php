<!DOCTYPE html>
<html>
<body>

<?php
$faks=array("marko","petar","luka","ivan","bernard","matej","tomislav","maja","iva","lucija");
echo "Studenti s manje od 5 znakova u imenu: <br> ";
for($x=0;$x<10;$x++) {
    if(strlen($faks[$x])<5)
    {
        echo $faks[$x];
        echo "<br>";
        
    }
       }
       array_push($faks,"jerko","tatjana","karlo","jelena","vlatko");
       print_r($faks);
       echo"<br>";
       sort($faks);
       print_r($faks);
       array_pop($faks);
       array_pop($faks);
       echo"<br>";
       print_r($faks);
       $faks = array_map('ucfirst', $faks);
       echo"<br>";
       print_r($faks);
       $parni=array();
       $neparni=array();
       $a=0;
       $b=0;
       for($x=0;$x<13;$x++)
       {
           if($x%2==0)
           {    $a++;
               $parni[$a]=$faks[$x];
           }
           else {
               $b++;
               $neparni[$b]=$faks[$x];
           }
               
           }
           echo"<br>";
           print_r($parni);
           echo"<br>";
           print_r($neparni);
         $temp=array(13,5,0,-3,4,52,25,22,-12,-18);
         echo"<br>";
         print_r($temp);
         $min=500000;
         $max=-100000;
         $mid=0;
         for($x=0;$x<10;$x++)
         {
         if($temp[$x]<$min){
             $min=$temp[$x];
         }
         if($temp[$x]>$max)
         {
             $max=$temp[$x];
         }
         $mid=$mid+$temp[$x];
         }
         $mid=$mid/10;
         echo "<br>","Najmanja temp je:".$min,"<br>","Najveca temp je:".$max,"<br>","Srednja temp je:".$mid;
       
?>

</body>
</html>