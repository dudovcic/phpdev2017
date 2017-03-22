<?php



$a = 20;
$b = 33.2;

$c = ( $a + $b) * ($b / $a);
echo $c;

// Indexed Array

$indarr = array( 11, "random string", true, "last one" );

// Associative Array

$assocarr = array( 
	"first" 	=> "monday",
	"second"	=> "tuesday",
	"third"		=> "wednesday",
	"fourth"	=> "thursday",
	"fifth"		=> "friday",
	"sixth"		=> "saturday",
	"seventh"	=> "sunday"
	 );

// Array print

	// Printing Indexed

	echo $indarr[0];
	echo $indarr[3];



	// Printing Associative

	echo $assocarr["first"];
	echo $assocarr["seventh"];



	// Complete Array

	echo print_r($indarr);
	echo print_r($assocarr);



	// Array length

	echo count($indarr);
	echo count($assocarr);

// Vars

$ime 		= "Denis";
$prezime 	= "Udovcic";

$ask = "Dobar dan " . $ime . ", da li se vi prezivate " . $prezime . " ?";
echo $ask;

echo strlen($ask);


// --- BONUS ---


$someArr = array();

for ( $i = 0; $i < 777; $i++ ) {

	array_push($someArr, genRandomString() );

}

printEveryX($someArr, 5);


function genRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charLength - 1)];
    }
    return $randomString;
}

function printEveryX(&$arr, $X) {
	for ( $i = 0; $i < count($arr); $i+= $X) {
        echo $arr[$i]."<br/>";
	}
}

?>
