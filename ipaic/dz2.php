<?php
$a= 8;
$b= 6.0;
$c= $a / $b;
echo "Rezultat je: $c <br>";
$auti = array("Ferari","BMW","Lambo");
var_dump($auti);
echo "<br>";
$arrayduljina= count($auti);
echo "Duljina arraya je:", $arrayduljina, "<br>";
for($x = 0; $x < $arrayduljina; $x++) {
    echo $auti[$x];
    echo "<br>";    
}
$visina = array("Matko"=>"135", "Pero"=>"237", "Apolon"=>"43", "Stevo"=>"173");
$visinaduljina= count($visina);
var_dump($visina);
echo "<br>";
echo "Duljina ovog drugog je: $visinaduljina", "<br>";
foreach ($visina as $obilježje =>$vrijednost ) {
    echo "$obilježje $vrijednost <br>";
}
$ime = "Ivan";
$prezime = "Paich";
echo ("Valjd je ovo rješenje $ime problema $prezime");
echo "<br>";
echo "Duljina stringa je: ",strlen("Valjd je ovo rješenje $ime . problema  $prezime");
echo "<br>";
$bonus = array();
$y= 0;
for($x = 0; $x <= 777; $x++)
{
    $bonus[$x]= rand(0, 1000);
    if(($x%5) == "0")
    {
        echo "$bonus[$x], <br>";
        $y=$y+1;
        
    }
}
echo "Broj ispisanih članova: $y";
        ?>