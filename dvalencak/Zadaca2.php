<?php

//Zadatak 1 - Kreirati $a (int), $b (double). Izvršiti operacije +,-,*,/,% te rezultat spremiti u $c(double)
$a = 13;
$b = 6.87237;

echo $c = ($a + $b);
echo "<br/>";
echo $c = ($a - $b);
echo "<br/>";
echo $c = ($a * $b);
echo "<br/>";
echo $c = ($a / $b);
echo "<br/>";
echo $c = ($a % $b);
        
echo "<hr>";

// Zadatak 2 - Kreirati indexirani array
$sportovisaloptom = array ("nogomet", "kosarka", "rukomet", "vaterpolo");

echo "Neki sportovi sa loptom: " . $sportovisaloptom[0] . ", " . $sportovisaloptom[1] . ", " . $sportovisaloptom[2] . " i " . $sportovisaloptom[3] . ".";

echo "<hr>";

// Zadatak 3 - Kreirati asocijativni array
$rijeke = array("Egipat"=>"Nil", "Brazil"=>"Amazonu", "Kina"=>"Jangce", "Rusija"=>"Volga");

// Zadatak 4 - Isprintati pojedine članove arraya
echo "U Kini je rijeka " . $rijeke['Kina'] . ", Brazil ima rijeku " . $rijeke['Brazil'] . ", a u Rusiji je " . $rijeke['Rusija'] . "!";

echo "<hr>";

// Zadatak 5 - Isprintati cijeli array
echo print_r ($sportovisaloptom);

echo "<br>";

echo print_r ($rijeke);

echo "<hr>";

// Zadatak 6 - Isprintati duljinu arraya (broj članova)
$sportovisaloptom = array ("nogomet", "kosarka", "rukomet", "vaterpolo");

echo count ($sportovisaloptom);

echo "<br>";


        

      
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

