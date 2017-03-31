<?php



function hipo($v_1, $v_2) {
	return sqrt($v_1*$v_1 + $v_2*$v_2);
};

echo hipo(9, 15);

echo "<br/>";echo "<br/>";

function sqr($arr) {
	return array_map( function($v) {return  $v*$v;}, $arr );
};

print_r(sqr(array(2,4,6)));

echo "<br/>";echo "<br/>";



function samoglasnici($tekst) {
  return preg_replace("/[aeiou]/i", "", $tekst);
 }

echo samoglasnici("Funkcija ce Izbaciti sve SAMOGlasnike nebitno jesu li 'upper/lower cAse' ");
















?>
