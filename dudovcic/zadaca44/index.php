<?php 


// Read file from the web
$file1 = fopen("http://www.24sata.hr/feeds/aktualno.xml", "rt");
$string1 = "";

while(!feof($file1)) {
	$string1 .= fgets($file1, 512);
}
	echo $string1; // String

fclose($file1);


// Write the web file locally
$file2 = fopen("aktualno.xml", "wt");

fwrite($file2, $string1);

fclose($file2);

// XML to JSON

$xml = simplexml_load_string( file_get_contents("aktualno.xml"));
$json = json_encode($xml);
$arr = json_decode($json,TRUE);

print_r($arr); // Array















