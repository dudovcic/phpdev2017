<?php

function zbroj($a,$b)
{
    $sum=$a+$b;
    return $sum;
    }
    
function oduzmi(&$prvi, &$drugi)
{
     $prvi-=$drugi; 
   }
   

$a=30;
$b=6;
function dij()
{
    global $a;
    global $b;
    return $a / $b;
}
#$z=0;
// sa static

function mno($a,$b) {
    static $z=0;
                         
while($b>0){
        $b--;
      $z+=$a;
     # echo $z;
         
              }
          
   if ($b <= 0) {
        return $z;     
            }
          mno($a,$b);  
           }

$izbornik='oduzmi';
switch($izbornik){
case 'zbroj';    echo 'Rezultat nakon zbrajanja je :'.zbroj(5, 6);
    break;
case 'oduzmi';    echo 'Rezultat nakon oduzimanja je :'. oduzmi(25,15);
    break;
case 'dij';    echo 'Rezultat nakon dijeljenja je :'. dij();
    break;

case 'mno';    echo 'Umnozak je :'. mno(5,7);
    break;
}


/*function mno($a,$b)
{
   static $c=$b*$a;
}*/
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

