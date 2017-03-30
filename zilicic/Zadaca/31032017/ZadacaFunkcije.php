<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Napraviti funkciju hipo() koja uzima dvije katete a vraća hipotenuzu
function hipo($x,$y){
        
    return sqrt($x*$x+$y*$y) ;
    }
echo "<br>";
echo hipo(3,4);

//Napraviti funkciju koja prima jednodimenzionalno polje i vraća polje kvadrata elemenata
function poljeKvadrat()
{}
echo "<br>";



//Funkcija koja prima text i iz njega izbacuje sve samoglasnike

function izbaci($Str){
$samo = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
		return str_replace($samo, "", $Str);
         }
echo izbaci("Domaca");