<?php 

function main($oper, &$a, &$b) {


	switch($oper) {
		case "zbroj":
			return zbr($a, $b);
			break;
		case "razlika":
			return razl($a, $b);
			break;
		case "umnozak":
			return mno($a, $b);
			break;
		case "podjela":
			return dij();
			break;
		default: return "Incorrect operation";

	}
}


function zbr($a, $b) {
	return $a + $b;
}



function razl(&$a, &$b) {
	return $a - $b;
}



function mno($a, $b) {
	static $x ;
	$x = $a;
	static $y ;
	$y = $b;

	return $x * $y;
}



function dij() {
	global $a;
	global $b;
	return $a / $b;
}

$a = 20;
$b = 30;

echo main("zbroj", $a, $b);
echo "<br>";
echo main("razlika", $a, $b);
echo "<br>";
echo main("podjela", $a, $b);
echo "<br>";
echo main("umnozak", $a, $b);

 ?>