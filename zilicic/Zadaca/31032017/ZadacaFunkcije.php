<?php

//Napraviti funkciju hipo() koja uzima dvije katete a vraća hipotenuzu
function hipo($x,$y){
        
    return sqrt($x*$x+$y*$y) ;
    }
echo "<br>";
echo 'Dužina hipotenuze je : '.hipo(3,4);
echo'<hr><br>';

//Napraviti funkciju koja prima jednodimenzionalno polje i vraća polje kvadrata elemenata
  
//verzija koja daje samo jednu vrijednost
/*function poljeKvadrat($value){
   	$p = array($value);{
		
		foreach ($p as $key=> $value)
		$p[$key]=$value;
			print_r($p);echo '<br />';
			}
	$br_elem = count($p);
	
	for($i=0; $i < $br_elem; $i++)
{
		return($p[$i])*($p[$i]);
		
		echo '<br />';
}
}
echo poljeKvadrat(5);
*/

//Ispravna verzija
function poljeKvadrat($kvadrat)
{
    return($kvadrat * $kvadrat);
}

$a = array(1, 2, 3);
$b = array_map("poljeKvadrat", $a);
print_r($b);
echo'<hr><br>';
//Funkcija koja prima text i iz njega izbacuje sve samoglasnike

function izbaci($Str){
$samo = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
		return str_replace($samo, "", $Str);
         }
         
echo izbaci("Zlatko");


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */