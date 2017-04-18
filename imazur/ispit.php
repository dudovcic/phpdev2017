<!DOCTYPE html>
<html>
<head>
<body> 


<?php



include "data.php";

$data = array($data);

echo "<pre>";
print_r($data);
echo "</pre>";
echo "<hr>";


?>

    
    <table border="2pxl black">
        <th><font color="black"></th>
        
 
             
            <?php
 

// echo "<table border 1px>";
  echo"<tr>";
  echo"<th>RBR</th>";
  echo"<th>IME</th>";
  echo"<th>PREZIME</th>";
  echo"<th>DATUM</th>";
  echo"<th>PLACENO</th>";
echo "</tr>";
      
      foreach ($data as $key => $red) 
    { 
      
     
    }
    
    foreach ($data as $key){
       
        
    }
    foreach ($key as $redo){
       echo '<tr>';
        echo '<td>' . key . '</td>';
        echo '<td>' . $redo['ime'] . '</td>';
        echo '<td>' . $redo['prezime'] . '</td>';
        echo '<td>' . datumm . '</td>';
        echo '<td>'; 
         echo "<select name=izbornik>";
         echo "<option value=da>DA</option>";
         echo "<option value=ne>NE</option>";
         echo "</select>";
         echo "</form>";
         echo  '</td>';
        echo '</tr>';
    }     
echo "</table>";
  /*          
$data[1]["datum"] = "2011-03-01";
function date_trans($date)
{
  return date ('d.m.Y',strtotime($date));
  
  }
  
   */
function datumm ($newDate){
$data[1]["datum"] = '2011-03-01';
$arr = explode('-', $data[1]["datum"]);
$newDate = $arr[2].'-'.$arr[1].'-'.$arr[0];
}  


//echo $final = date_trans($data[1]["datum"]);

echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "tablica mnozenja";
echo "<hr>";
echo"<table border 2px>";
for($x=1; $x<=10; $x++)
{
    echo "<tr>";
    for($y=1; $y<=10; $y++)
    {
       echo "<td>".$x * $y."</td>" ;
    }
    echo"</tr>";
}
    
echo"</table>";