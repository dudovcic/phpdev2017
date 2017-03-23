<?php
$a= 5;
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
        ?>