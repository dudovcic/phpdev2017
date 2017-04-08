<?php
$a=2;
function inc_a() //
{
    global $a;
    $a++;
    echo $a; //rezultat je 3
}

inc_a();
echo $a;//rezultat je 3 zato sto je zadano kao global
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

