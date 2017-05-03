<?php include 'new_mysqli.php'; 

      
      //zad 3.10 Zadaci za ponavljanje ZAD 1
      $query_tpl =" SELECT mbrStud, prezStud FROM stud WHERE imeStud = ?";
      $imeStud = "Ivan";
      
      
      
      if($stmt = $mysqli->prepare($query_tpl)){
          $stmt->bind_param('s',$imeStud);
          $stmt->execute();
          $stmt->bind_result($mbrStud, $prezStud);
          while($stmt->fetch()){
          echo $mbrStud ,$prezStud."<br>";
          }
          $stmt->close();
       }
          $mysqli->close();
          echo "<br>";
          echo "<br>";
          
          //zad 3.10 Zadaci za ponavljanje ZAD 2

          include 'new_mysqli.php';
          $query_tpl =" SELECT nazPred FROM pred order by nazPred asc";
     if($stmt = $mysqli->prepare($query_tpl)){
          $stmt->execute();
          $stmt->bind_result($nazPred);
          while($stmt->fetch()){
          echo $nazPred ."<br>";
          }
          $stmt->close();
       }
          $mysqli->close();
          echo "<br>";
          echo "<br>";
          
          //zad 3.10 Zadaci za ponavljanje ZAD 3
          include 'new_mysqli.php';
          
          $query_tpl =" SELECT  imeStud, prezStud FROM stud WHERE prezStud LIKE 'B%'";
          $prez = 'B';
     if($stmt = $mysqli->prepare($query_tpl)){
          $stmt->bind_param('s', $prez);
          $stmt->execute();
          $stmt->bind_result($imeStud, $prezStud);
          while($stmt->fetch()){
          echo  $imeStud.' '. $prezStud."<br>";
          }
          $stmt->close();
       }
          $mysqli->close();
          echo "<br>";
          echo "<br>";
        
        ?>
        
       
  