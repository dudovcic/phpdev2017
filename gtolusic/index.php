<?php

//hipotenuza
function hipo($x,$y) {
        echo "ako je dužina prve katete:".$x. " i dužina druge katete:".$y." Onda je dužina hipotenuze:".hypot($x,$y);
         
    }
    
    hipo(6,7);
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    //kvadrati iz arraya
    
    $brojevi = array (2,4,5,6);
   
   
    function kvadrati($brojevi)  {      
             foreach ($brojevi as $p){
    $kvadrat = $p*$p;
     print_r($kvadrat);
              echo "<hr>";
    
             }
    }
    
    kvadrati($brojevi);
    
    //samoglasnici
   
     $abc="ovo je samo sa malim suglasnicima";
    echo samo($abc);
   
    function samo($recenica){
                $samoglasnici=array ("q", "w", "r", "t", "z", "p", "š", "đ" ,"s", "d", "f", " ", "g", "h", "j", "k", "l","č", "ć", "ž", "x", "c","v","b","n","m");
                
                              
        echo str_replace($samoglasnici,"", $recenica);
        
                    
    }
   
  
?>