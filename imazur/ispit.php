<!DOCTYPE html>
<html>
<head>
<body> 


<?php



include "data.php";

$data = array($data);
//array_unshift($data,[4],[1], "rbr");
/*
echo "<pre>";
print_r($data);
echo "</pre>";
echo "<hr>";

//array_unshift($data, "rbr");
*/
?>

    
    <table border="2pxl black">
        <th><font color="black">rbr</th><th>Prezime</th><th>Ime</th><th>Datum prijave</th><th>plaćeno</font></th>
 
             
            <?php
 

foreach ($data as $key => $value) {
    echo "<tr>";
    echo ("<td>" . $key ."</td>");
    echo ("<td>" . $value [1]["ime"] . "</td>");
    echo ("<td>" . $value [1]["prezime"] . "</td>");
    echo ("<td>" . $value [1]["datum"] . "</td>");
    echo ("<td>" . $value [1]["placeno"] . "</td>");
    echo "</tr>";
}
echo "</table>";