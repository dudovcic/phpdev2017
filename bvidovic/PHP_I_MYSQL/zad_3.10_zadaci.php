<?php include 'new_mysqli.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
  
    </head>
    <body>
      <?php
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
        ?>
        
       
    </body>
</html>
