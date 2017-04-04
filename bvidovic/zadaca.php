<html>
    <head>
        <title>Php</title>        
    </head>
    <body>
 
     <?php
     $studenti = array (
         "danijel ",
         "luka ",
         "petar ",
         "ivo ",
         "andrija ",
         "marko ",
         "domagoj ",
         "goran ",
         "tihomir ",
         "ana "
     );
        foreach ($studenti as $value){
         echo "$value ";
     }
         echo "<hr>";
     
         echo $studenti[1],$studenti[3],$studenti[9];
    
     echo "<hr>";
     
    array_push($studenti,"mirko ","vjeran ","drago ","nenad ","hrvoje ");
        foreach ($studenti as $value){
         echo "$value";
        }
        echo"<hr>";
        
    asort($studenti);
        foreach ($studenti as $value){
         echo "$value ";
        }
       echo "<hr>";
       
    array_pop($studenti);
    array_pop($studenti);
           foreach ($studenti as $value){
            echo "$value";
        }
        
        echo "<hr>";
       
        foreach ($studenti as $value){
         echo ucfirst($value );
        }
        echo "<hr>";
        echo "<br>";
         $temp = array("10","30.2","15.4","22","27.5","33","5.7","16","9.1","37");
       function listvalues($value)
    {
        echo "$value, ";
    }

    function printAverage($array)
    {
        $total = 0;
        foreach($array as $element)
        {
            $total += $element;
        }
        echo number_format($total / count($array), 1);
    }

    echo "Zabilježene temperature su : ";
    array_walk($temp, "listvalues");
    echo "<br>";

    echo "Srednja Temperatura je : ";
    printAverage($temp);
    echo "<br>";
    
    echo "Največa temperatura je : ";
    echo max($temp);
    echo "<br>";
    
    echo "Najmanja  temperatura je : ";
    echo min($temp);
    echo "<br>";
    
  $odd=array("danijel ","petar ","ivo ","andrija ","marko ","domagoj ",
      "goran ","tihomir ","ana ","mirko ",);
  
    $even=array("luka ","vjeran ","hrvoje ");
        
     
     ?>
        
        
    </body>
</html>
