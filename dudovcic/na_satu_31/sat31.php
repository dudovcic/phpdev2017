<?php 

function main($oper, $a, $b) {

	switch($oper) {
		case "zbr":
			return zbr($a, $b);
			break;
		case "zbr":
			return razl($a, $b);
			break;
		case "zbr":
			return mno($a, $b);
			break;
		case "zbr":
			return dij($a, $b);
			break;
		default: return "Incorrect operation";

	}
}


function zbr($a, $b) {
	return $a + $b;
}



function razl($a, $b) {
	return $a - $b;
}



function mno($a, $b) {
	return $a * $b;
}



function dij($a, $b) {
	return $a / $b;
}


 ?>