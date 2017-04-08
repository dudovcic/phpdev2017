<?php

// 1. Napraviti funkciju hipo() koja uzima dvije katete a vraća hipotenuzu

// Primjer 1
echo hypot(5,7) . "<br>";

// Primjer 2
function hipo($c, $d){
    return sqrt($c*$c+$d*$d);
}

print hipo(7,5);

echo "<hr>";

// 2. Napraviti funkciju koja prima jednonimenzionalno polje i vraća polje kvadrata elementa

function kvadrat($n)
{
    return($n * $n);
}

$a = array(2, 4, 6);
$b = array_map("kvadrat", $a);
print_r($b);

echo "<hr>";

// 3. Funkcija koja prima text i iz njega izbacuje sve samoglasnike

$text = 'Ja se zovem Nemanja i ovo je moj zadatak u kojem moram izbrisati sve samoglasnike!';

$obrisisamoglasnike = array('a', 'e', 'i', 'o', 'u', 'r');
$textzavrsan = str_replace($obrisisamoglasnike, '', $text);

echo $textzavrsan; 
