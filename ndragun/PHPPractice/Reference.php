<?php

function foo(&$var)
{
    $var++;
}

$a=5;
foo($a);

echo $a;

// $a is 6 here

// Primjer 2


echo "<hr>";

function potencija(&$var, $n=2){
    
    
    $var=$var**$n;
}

$x=3;
$y=2;

potencija($x,3);

potencija($y);

echo $x." y=" .$y;

// Primjer 3

/*

echo "<hr>";

function pot(&$var, $n=2){
    
    global $x;
    $x=$x**$n;
}
pot($x,3);


echo $x; */

// Primjer 4

function pot1(&$var, $n=2){
    
    return $var**$n;
}

echo "<br>";
echo pot1($x,3);

