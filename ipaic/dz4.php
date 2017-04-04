<!DOCTYPE html>
<html>
    <body>
        <?php
        // prvi zadatak Napraviti funkciju hipo() koja uzima dvije katete a vraća hipotenuzu
    function hipo($a,$b)
    {
        return sqrt($a*$a+$b*$b);
    }
      echo hipo(4,3);
      
      // drugi Napraviti funkciju koja prima jednodimenzionalno polje i vraća polje kvadrata elemenata
      function polje($c)
      {
          for($i=0;$i<count($c);$i++)
          {
            $c[$i]=$c[$i]*$c[$i];
          }
          return $c;
          
      }
      $d=array(4,5,6,7,8,0,9,-5,20,-255);
      echo "<br>";
      print_r($d);
      
      
      echo "<br>";
      print_r(polje($d));
      
      // treći Funkcija koja prima text i iz njega izbacuje sve samoglasnike
      
      echo "<br>";
      
      function tekst($asd)
      {
          
          $samoglasnici = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
          $recenica = str_replace($samoglasnici, "", $asd);
          return $recenica;
          
      }
      $z="Jako dugačka recenica za testiranje.";
      
      echo tekst($z);
      $f="Još jedna malo kraća";
      echo "<br>";
      echo tekst($f);
        
 
        ?>

</body>
</html>



