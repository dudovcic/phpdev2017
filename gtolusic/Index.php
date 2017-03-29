<?php
//array studenti
$student = array("domagoj", "ana", "ivo", "tomislav", "ivica", "ena", "zvonimir", "ivana", "zrinka", "marko");
print_r($student);
echo "<br>";
//s manje od 5 znakova imena
$b= array_filter($student,"petica");
print_r($b);
echo "<br>";
function petica($x)
{
    if (strlen($x) < 5) {return ($x);}
    
};
//dodavanje 5 studenata
array_push($student, "jurica", "anela", "dijana", "hana", "damir");
print_r($student);
echo "<br>";
//sortiranje
sort($student);
print_r($student);
echo "<br>";
//ubijem zadnja 2
array_pop($student);
array_pop($student);
print_r($student);
echo "<br>";
//s velikim slovima
foreach ($student as $s) {
    echo(ucfirst($s))."<br>";
};
echo "<br>";
//temperature
$temperatura= array (1,2,3,4,5,6,7,8,9,10);
echo min($temperatura)."<br>";
echo max($temperatura)."<br>";
echo   array_sum($temperatura)/count($temperatura);

//iskreno zadatak sa neparnim i parnim studentima nisam dobro shvatio. Jel parni moraju biti keyevi ili broj karaktera? :/
    

?>