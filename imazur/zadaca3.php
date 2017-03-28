<?php

$studenti = array (1 => "marko",
                   2 => "ivan",
                   3 => "noa",
                   4 => "maja",
                   5 => "iva",
                   6 => "sandra",
                   7 => "tonka",
                   8 => "jelena",
                   9 => "vanja",
                  10 => "mario");
echo strlen ($studenti{1});
echo "<hr>";
array_push($studenti,"ivana","mirta","melita","miro","bruno" );
print_r($studenti);


echo "<hr>";
asort($studenti);
print_r($studenti);

echo "<hr>";
array_pop($studenti);
array_pop($studenti);

echo "<pre>";
print_r($studenti);
echo "</pre>";


echo ucwords($studenti);
echo "<pre>";
print_r($studenti);
echo "</pre>";



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

