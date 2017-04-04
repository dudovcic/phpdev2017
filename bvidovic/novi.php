<html>
    <head>
        <title>Php</title>
            
    </head>
    
    <body>
 
        <?php
       $a = 4;
       $b = 10.5;
       $c = $a + $b;
       echo "$c";
       echo "<br>";
       
       $boje = array ("Crvena ","Plava ","Zelena ");
       echo $boje[0];
       echo "<br>";
       echo $boje[1];
       echo "<br>";
       echo $boje[2];
       echo "<br>";
       echo $boje[0] . $boje[1] . $boje[2];
       echo "<br>";
       
       $naziv = array("Ime" => "Tomo ","Prezime" => "Bertic ", "Godine" => "23 ");
         echo $naziv['Ime'];
         echo "<br>";
         echo $naziv['Prezime'];
         echo "<br>";
         echo $naziv['Godine'];
         echo "<br>";
         echo $naziv['Ime'] . $naziv['Prezime'] . $naziv['Godine'];
         echo "<br>";
         
         echo count($naziv);
         echo"<br>";
         
         $index = array("ime" => " Ivo","prezime" => " Anić");
         echo "Dobar dan" . $index['ime'] . " jeli vaše prezime" . $index['prezime'];
         echo "<br>";
         echo strlen ("Dobar dan" . $index['ime'] . " jeli vaše prezime" . $index['prezime']);
        ?>
        
        
    </body>
</html>

