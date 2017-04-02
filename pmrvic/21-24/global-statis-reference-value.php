<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function zbr($a, $b) {
	return $a + $b;
}
function razl($a, $b) {
	return $a - $b;
}
$z=0;
// sa static
function mno($a, $b) {
    static $y=$b;
    static $z=0;
    $z+=$a; 
    while($y>0){
    $b--; 
    echo $b." ".$z;
    mno($a,$b);
    }
    if ($b<=0) return $z;
}
function dij($a, $b) {
	return $a / $b;
}
echo mno(3,3);