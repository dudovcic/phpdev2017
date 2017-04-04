<?php
echo "<h1> multidim polje</h1>";

$p1=array(1,2,3);
$p2=array(4,5,6);
$p3=array(7,8,9);
$m1=array($sp1,$sp2,$sp3);

function pp (&$polje){
  echo "<pre>";
print_r($m1);
echo "</pre>";  
}

echo "Ovo je drugi član iz prvog polja:
". $m1[1] [2];
$p4=[10,11,12];
array_push($m1,$p4);
echo '<br>';

//Petlja Prva - moćnija od druge
function pmp(&$m1){
for ($i=0;$i<count($m1);$i++) {
   for($j=0;$j<count($m1[$i]);$j++) {
       echo $m1[$i][$j];
   }
    //pp($m1[$i]);
    echo "<hr>";
    }
}
//Petlja Druga
function foric(&$m1){
    foreach ($m1 as $key=>$value){
        foreach ($value as $key=>$v){
            echo $v." ";
        }
    }
    }

pmp($m1);
//pp($m1);
//pp($p2);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

