<?php
// Zadatak 1 Unijeti polje s 10 studenata, sve malim slovima

$listastudenata = array("pero", "zrinka", "ena", "hrvoje", "mislav", "toni", "goran", "marta", "kruno", "marina");

print_r($listastudenata);

echo "<br>"; echo "<hr>";

// Zadatak 2 Pronaći sve studente čije ime je kraće od 5 znakova

echo "<br>";

foreach($listastudenata as $duzina) {
    if (strlen($duzina) < 5) 
	echo $duzina . "<br>";
}
 echo "<hr>";
 
// Zadatak 3 Dodati još 5 studenata
 
echo "<br>";

array_push($listastudenata, "damir", "mario", "ivan", "ivona", "una");

print_r($listastudenata);

echo "<br>"; echo "<hr>";


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

