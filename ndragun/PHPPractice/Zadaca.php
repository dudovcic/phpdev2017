<?php

//Zadatak 1 - Kreirati $a (int), $b (double). Izvršiti operacije +,-,*,/,% te rezultat spremiti u $c(double)
$a = 15;
$b = 4.3233;

echo $c = ($a + $b);
echo "<br/>";
echo $c = ($a - $b);
echo "<br/>";
echo $c = ($a * $b);
echo "<br/>";
echo $c = ($a / $b);
echo "<br/>";
echo $c = ($a % $b);

echo "<hr>";

// Zadatak 2 - Kreirati indexirani array
$gradovi = array("Zagreb", "Rim", "London"); 

echo "Nekoliko imena gradova: " . $gradovi[0] . ", " . $gradovi[1] . " i " . $gradovi[2] . ".";

echo "<hr>";

// Zadatak 3 - Kreirati asocijativni array
$ocijene = array("Nemanja"=>"3", "Petar"=>"5", "Mario"=>"2");
echo "Mario je dobio ocijenu " . $ocijene['Mario'] . ", a Petar je dobio ocijenu " . $ocijene['Petar'] . "!" ; // Zadatak 4 - Isprintati pojedinog člana arraya

echo "<hr>";

//Zadatak 5 - Isprintati cijeli array
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);

echo "<hr>";

// Zadatak 5 - Isprintati sve array values preko foreach komande
$gradovi = array("Zagreb", "Rim", "London"); 

foreach($gradovi as $svigradovi)
    
   echo "$svigradovi\n";

echo "<hr>";

// Zadatak 6 - Isprintati duljinu arraya

$gradovi = array("Zagreb", "Rim", "London"); 

echo count($gradovi);

echo "<hr>";

// Zadatak 7 - Napraviti dvije varijable, ime i prezime. Pomoću točke "." ih spojiti npr: "Dobar dan Ivo jeli vaše prezime Anić"?

$ime = "Nemanja";
$prezime = "Dragun";

echo "Dobar dan " .$ime. " jeli vaše prezime " .$prezime. "?";
echo "<br/>";
echo strlen($ime); // Zadatak 8 - Dohvatiti duljinu zadanog stringa

echo "<hr>";

// Zadatak 9 (BONUS) - Unijeti 777 random string ćlanova arraya, ispisati svaki 5-ti

$maxbroj = 777;

for ($i = 0; $i < $maxbroj; $i += 5)
{
    echo $i. "<br/>";
}

echo "<hr>";

$pismo = 0;
$bacanje = 0;
    while ($pismo < 3) {
        $flip = rand(0,1); //Generira random int
	$bacanje ++;
	if ($flip){
		$pismo ++;
		echo "<div class=\"coin\">Pismo</div>";
	}
	else {
		$pismo = 0;
		echo "<div class=\"coin\">Glava</div>";
	}
}
	echo "<p>Trebalo je {$bacanje} bacanja da bi dobili 3 Pisma zaredom!</p>";