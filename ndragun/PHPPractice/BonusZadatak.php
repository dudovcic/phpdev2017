<?php

$a=5;
$b=6;
function zbroj($a, $b){
    return $a+$b;
}

function razlika($a, $b){
    return $a-$b;
}

function umnozak($a, $b){
    return $a*$b;
}

function dijeljenje($a, $b){
    return $a/$b;
}

function sve ($a,$b){
    echo zbroj($a, $b); 
    echo "<br>";
    echo razlika($a, $b);
    echo "<br>";
    echo umnozak($a, $b);
    echo "<br>";
    echo dijeljenje($a, $b);
}

echo sve($a, $b);

// Global

echo "<hr>";

function inc_a()
{
    global $a, $b;
    return $a+$b;
}

echo "<br/>";

echo inc_a();

function inc_b()
{
    global $a, $b;
    return $a-$b;
}

echo "<br/>";

echo inc_b();

function inc_d()
{
    global $a, $b;
    return $a*$b;
}

echo "<br/>";

echo inc_d();

function inc_e()
{
    global $a, $b;
    return $a/$b;
}

echo "<br/>";

echo inc_e();

echo "<hr>";

// Static

function mno($a, $b) { 
	static $z = 0;
	static $t = 0;
	
	while ( $z < $a ) {
		$z++;
		$t += $b;
		mno($a, $b);
	}
	return $t;
}

echo mno(4,5);

// Refenrence

echo "<hr>";

function razl(&$var, $n=2){
    
    $var=$var-$n;
}
$x=25;
$y=15;
razl($x,$y);

$x=25;
$y=15;

razl($x,$y);

echo $x;