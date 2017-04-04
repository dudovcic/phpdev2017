<?php

// zad 1

function h($x, $y){
    $hi = (pow($x,2))+(pow($y,2));
    $hi = sqrt ($hi);
    return ($hi);
}

echo "hipotenuza nad katetama 3 i 4 je ". h(3,4) . "<br>";

echo "<hr>"; 


// zad 2

function kvad ($kva){
        return array_map( 
                function($kv) 
                {return  (pow($kv,2));}, $kva );
    
  } 
print_r(kvad(array(3,5,9)));
echo "<hr>";


// zad 3

function slova ($ss) {
    $s = array ("a","e","i","o","u");
    $r = str_replace($s, "", $ss);
    return $r;
}
echo "fale ti slova " . slova ("magarac");
    


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

