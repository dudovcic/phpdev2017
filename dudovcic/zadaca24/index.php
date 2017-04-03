<?php
echo "<br/>";echo "<br/>";

echo "      Math ops";echo "<br/>";echo "<br/>";
// Numeric ops
// Int
$a = (int)20;	

// Double
$b = (double)33.2; 


$c = (double)(( $a + $b) * ($b / $a));
echo $c;    echo "<br/>";

echo "<br/>";echo "<br/>";echo "<br/>";
echo "________________________________________";
echo "<br/>";echo "<br/>";
echo "          Arrays";

// Arrays



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


echo "<br/>";echo "<br/>";echo "<br/>";
// Array print

echo "<br/>";
echo "  Index array";echo "<br/>";echo "<br/>";
	// Printing Indexed

	echo $indarr[0];        echo "<br/>";
	echo $indarr[3];        echo "<br/>";

echo "<br/>";
echo "  Assoc array";echo "<br/>";echo "<br/>";
	// Printing Associative

	echo $assocarr["first"];        echo "<br/>";
	echo $assocarr["seventh"];      echo "<br/>";

echo "<br/>";
echo "  Compl array";echo "<br/>";echo "<br/>";
	// Complete Array

	echo print_r($indarr);      echo "<br/>";
	echo print_r($assocarr);    echo "<br/>";  


echo "<br/>";echo "<br/>";
echo "  Array count()"; echo "<br/>";echo "<br/>";
	// Array length

	echo count($indarr);    echo "<br/>";
	echo count($assocarr);  echo "<br/>";



echo "<br/>";echo "<br/>";echo "<br/>";
echo "________________________________________";
echo "<br/>";echo "<br/>";echo "<br/>";
echo "          Ime - Prezime";
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
// Vars

$ime 		= "Denis";
$prezime 	= "Udovcic";

$ask = "Dobar dan " . $ime . ", da li se vi prezivate " . $prezime . " ?";
echo $ask;  echo "<br/>";

echo strlen($ask);  echo "<br/>";




echo "<br/>";echo "<br/>";echo "<br/>";

echo "________________________________________";
echo "<br/>";echo "<br/>";
echo "          Bonus ";echo "<br/>";echo "<br/>";
// 				--- BONUS ---


$someArr = array();

for ( $i = 0; $i < 777; $i++ ) {

	array_push($someArr, genRandomString( rand(7, 15) ) );

}

printEveryX($someArr);



// Functions


// Return random string with length 10 ( by deafult )

function genRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charLength - 1)];
    }
    return $randomString;
}

// Print every 5th ( by default ) value from array

function printEveryX(&$arr , $X = 5) {  /*  $arr passed by reference */ 
	for ( $i = 0; $i < count($arr); $i+= $X) {
        echo $arr[$i]."<br/>";
	}
}

?>
