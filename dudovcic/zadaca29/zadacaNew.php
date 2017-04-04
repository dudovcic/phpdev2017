<?php
echo "<br/>";echo "<br/>";echo "<br/>";

$studenti = array("marin", "ivan", "david", "ivana", "danijel", "marina", "zoran", "ivica", "nikola", "ana");
echo "Lista studenata";echo "<br/>";echo "<br/>";
print_r($studenti);
echo "<br/>";


$lessThan5 = array_filter($studenti, "lessfive");


function lessfive($v) {
	if ( strlen($v) < 5 ){
		return  strlen($v < 5 );
	}
}
echo "<br/>";echo "<br/>";
echo "<hr/>";
echo "array_filter -- return IME_STUDENTA < 5 ";
echo "<br/>";echo "<br/>";
print_r($lessThan5);
echo "<br/>";echo "<br/>";echo "<br/>";
echo "<hr/>";
echo "<br/>";echo "<br/>";

echo "Dodati 5 studenata";
echo "<br/>";echo "<br/>";

array_push($studenti, "josipa", "josip", "petar", "andrea", "dominik");


print_r($studenti);
echo "<br/>";echo "<br/>";echo "<br/>";
echo "<hr/>";
echo "<br/>";echo "<br/>";

echo "Sortirati po imenu";
echo "<br/>";

sort($studenti);

echo "<br/>";echo "<br/>";
print_r($studenti);


echo "<br/>";echo "<br/>";echo "<br/>";
echo "<hr/>";
echo "<br/>";echo "<br/>";

echo "Maknuti zadnja 2";
echo "<br/>";echo "<br/>";

array_pop($studenti);array_pop($studenti);
print_r($studenti);
echo "<br/>";echo "<br/>";echo "<br/>";


echo "<hr/>";
echo "<br/>";echo "<br/>";echo "<br/>";

echo "Prvo slovo veliko";
echo "<br/>";echo "<br/>";
$studenti = array_map("myfunc", $studenti);


function myfunc($v) {
	return ucfirst($v);
}

print_r($studenti);

echo "<br/>";echo "<br/>";echo "<br/>";
echo "<hr/>";
echo "<br/>";echo "<br/>";echo "<br/>";



echo "Parni, neparni";
echo "<br/>";echo "<br/>";

$neparni = array();
$parni = array();
foreach ($studenti as $k => $v) {
    if ($k % 2 == 0) {
        $parni[$k] = $v;
    }
    else {
        $neparni[$k] = $v;
    }
}
echo "<br/>";
print_r($neparni);echo "<br/>";echo "<br/>";
print_r($parni);echo "<br/>";echo "<br/>";

echo "<br/>";
echo "<hr/>";
echo "<br/>";echo "<br/>";echo "<br/>";

echo "Temperatura";
echo "<br/>";echo "<br/>";

$temp = array(0, 10, 30, 40, 39, 11, 22, 31, 27, 7);

$najmanja = min($temp);
$najveca = max($temp);
$srednja = array_sum($temp) / count($temp);;

echo "Najmanja temperatura u arrayu je ". $najmanja;echo "<br/>";echo "<br/>";
echo "Najveca temperatura u arrayu je ". $najveca;echo "<br/>";echo "<br/>";
echo "Srednja temperatura u arrayu je " .$srednja;echo "<br/>";echo "<br/>";

echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
?>