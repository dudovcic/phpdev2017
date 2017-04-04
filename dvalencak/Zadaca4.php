<?php

// Zadatak 1 Napraviti funkciju hipo() koja uzima dvije katete a vraća hipotenuzu

// 1. način

function hipo($a, $b) {
    return sqrt($a*$a + $b*$b);
}
echo hipo(6, 3);

echo "<br>"; echo "<hr>";

// 2. način

echo hypot(6,3) . "<br>";
echo hypot(2,8) . "<br>";

echo "<br>"; echo "<hr>";

// Zadatak 2 Napraviti funkciju koja prima jednodimenzionalno polje i vraća polje kvadrata elemenata

function elementnakvadrat($k) {
    return($k * $k);
}

$c = array(1,2,3,4,5,6,7);

$d = array_map("elementnakvadrat", $c);

print_r ($d);

echo "<br>"; echo "<hr>";

// Zadatak 3 Funkcija koja prima text i iz njega izbacuje sve samoglasnike

$recenica = "Ovdje treba izbaciti sve samoglasnike.";

$svisamoglasnici = array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");

$rezultat = str_replace($svisamoglasnici, " ", $recenica);

echo "<br>";

echo $rezultat;

echo "<br>"; echo "<hr>";

?>






/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

