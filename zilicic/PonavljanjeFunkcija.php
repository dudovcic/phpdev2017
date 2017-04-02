<?php

function zbroj($a,$b)
{
    $sum=$a+$b;
    return $sum;
    }
    echo zbroj(2,4);
$a=2;
$b=2;
function oduzmi($a,$b)
{
    return $a-$b; 
}
echo oduzmi(4,1);
$a=6;
$b=2;
function dijl()

{
    global $a;
    global $b;
    return $a / $b;
}
echo dijl();
/*function mno($a,$b)
{
   static $c=$b*$a;
}*/
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

