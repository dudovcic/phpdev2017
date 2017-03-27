<?php

//Zadatak 1 - Kreirati $a (int), $b (double). Izvršiti operacije +,-,*,/,% te rezultat spremiti u $c(double)

$a = (int)13;
$b = (double)6.87237;
echo print_r ('$c(double) = ');
echo $c = ($a + $b) . ", " . ($a - $b) . ", " . ($a * $b) . ", " . ($a / $b) . ", " . ($a % $b);
  
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

echo "<br>";

echo print_r ($rijeke);

echo "<hr>";

// Zadatak 6 - Isprintati duljinu arraya (broj članova)

echo count ($sportovisaloptom);

echo "<br>";

echo "<br>";

echo count ($rijeke);

echo "<hr>";

// Zadatak 7 - Napraviti dvije varijable, ime i prezime. Pomoću točke "." ih spojiti npr: "Dobar dan Ivo jeli vaše prezime Anić"?

$ime = "Domagoj";

$prezime = "Valenčak";

$pitanje = "Zanima me " . $ime . ", odakle potječe tvoje prezime " . $prezime . " ?";

echo $pitanje;

echo "<hr>";

// Zadatak 8 - Dohvatiti duljinu zadanog stringa

echo strlen ($pitanje);

echo "<hr>";

?>
