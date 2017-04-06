<?php

function hipo($a,$b){
    return $c=sqrt($a*$a+$b*$b);
    
}

echo hipo(-3,-3);
echo "<hr>";

function kvadrat($x){
    return $x*$x;
}
//spremit u polje i vratit polje,array map
function polje_kvadrata($array1){
    for($i=0;$i<count($array1);$i++){
        $array1[$i]=$array1[$i]*$array1[$i];
        
    }
    return $array1;
}

$p1=array(8,5,6,7,23,45,6,7,89,99,0,1,999);
print_f($p1);
echo "<br>";


echo "<hr>";
//regular_expres 2.opcijes
function text($string){ 
  $string = preg_replace('/(?:[aeiou]|(?<=[bcdfghjklmnpqrstvwxyz]))/','', $string); 
   return $string;
 }

echo text("aeiou ovo bi trebalo izbrisati sve samoglasnike hahahhahahahah");

echo "<hr>";














?>