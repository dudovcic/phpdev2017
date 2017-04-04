<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$vrijeme= time();
echo $vrijeme;

echo "<br>";
echo "danas je: ".date('d');
echo " ".date('m');
echo " ".date('o');
echo "<br>";
echo "Ovoo je neki probni timestamp:".date('D',1490659200);
echo "<br>";
echo "Ovoo je neki probni timestamp:".date('D',strtotime('25-12-1978'));
echo "<br>";
echo " ".strtotime('now');
echo "<hr>";

function kvadrat($x){
    return $x*$x;
    //return $x+523532;
}
echo kvadrat(5);
echo "<br>";

echo kvadrat(kvadrat(5));

function zbroj($x,$y=4){
    if(func_num_args()>2){
        return $x+$y+func_get_arg(2);
    }
    else{
    return $x+$y;
    }
}

echo "<br>";
echo zbroj(5);
echo "<br>";
echo zbroj(5,10);
echo "<br>";
echo zbroj(5,10,99);

echo "<hr>";

