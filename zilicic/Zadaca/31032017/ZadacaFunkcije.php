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
echo 'Dužina hipotenuze je : '.hipo(3,4);
echo'<br>';

//Napraviti funkciju koja prima jednodimenzionalno polje i vraća polje kvadrata elemenata
function newArray(){
//create an empty array
    $newArray = array();
    //methods for inserting values into a newly created array
    $newArray[] = "a value";
    $anotherArray = array( "value", "another value");
    }
    print newArray;
function takes_array($arr){
    
}

//Funkcija koja prima text i iz njega izbacuje sve samoglasnike

function izbaci($Str){
$samo = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
		return str_replace($samo, "", $Str);
         }
         
echo izbaci("Zlatko");