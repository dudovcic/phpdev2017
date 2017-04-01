<html>
    <head>
        <title>Php</title>
            
    </head>
    
    <body>
 <?php
       
        # zadaca hipotenuza
    function hipo($kat1, $kat2){
        return sqrt($kat1*$kat1+$kat2*$kat2);
    }
    echo "Hipotenuza je : " . hipo(4,3);
    echo "<br>";
     
    # funkcija sa samoglasnicima
 
   $tekst = "Povijest knjige stara je više od 7 000 godina. U tome vremenu mijenjala je svoj oblik";
     $smgls = array('a', 'e', 'i', 'o', 'u', );
     $obrisati = str_replace($smgls, '', $tekst);
     echo $obrisati; 
     echo"<br>";
  
    #polje kvadrata elementa
     
     function nakvadrat($i)
  {
    return($i * $i);
  }
  $a = array(3, 5, 7, 9);
  $b = array_map("nakvadrat", $a);
   print_r($b);
  
    ?>
        
        
    </body>
</html>

