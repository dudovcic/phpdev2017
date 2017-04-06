<?php

// zad1

$filename = "ucenici.txt";

$datoteka = file ($filename);
foreach ($datoteka as $line_num=> $line) {
    echo "Linija #<b>".$line_num."</b>: ".$line."<br/>";
}


/*


$contents = fread ($handle, filesize($filename));
fclose($handle);

echo $contents;

echo "<hr>";


//zad2
$filenamee = "profesori.txt";

$handlee = fopen ($filenamee, "w+");
$contentss = fwrite ($handlee, "Maja Maja");
fclose($handlee);

echo $contentss;

/* 
 * To change this license$handle, filesize header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

