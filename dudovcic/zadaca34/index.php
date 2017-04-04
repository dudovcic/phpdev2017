<?php


function zbr( $a, $b ) {
	return $a+$b;
}

function razl(&$a, &$b) {
	$a -= $b;
}

function mno($a, $b) { 
	// Ne radi sa double, ali se sluzi sa static
	static $brojac = 0;
	static $total = 0;
	
	// Moze i "while"
	if ( $brojac < $a ) {
		$brojac++;
		$total += $b;
		mno($a, $b);
	}
	return $total;

}

function dij() {
	global $a;
	global $b;
	$a /= 6;
}


echo zbr(5, 6); // ZBROJ
echo "<br>";


$a = 25;
$b = 15;
razl($a, $b); // RAZLIKA
echo $a;
echo "<br>";



echo mno(4,5); // MNOZENJE
echo "<br>";




$a = 30;
$b = 6;
dij();	// DIJELJENEJ
echo $a;

