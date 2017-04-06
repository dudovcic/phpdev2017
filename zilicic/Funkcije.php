<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vrijeme= time();
echo $vrijeme;
$mjeseci=[ 
    'sjec',
    'velj',
    'ozujak',
    'travanj',
    'svibanj'
];


echo "danas je:".$mjeseci[date('n')-1]." mjesec";
//1490814995 vrijeme od 01.01.1970 Unix
echo "Ovo je neki probni timestamp:".date('D',1490814995);
echo "Ovo je neki drugi probni timestamp:".date('D', strtotime('25-12-1978'));
echo "Ovo je neki treci probni timestamp:".date('D',strtotime('25-12-1978'));

function kvadrat($x){
   // return $x*$x;
   return $x+5895145; 
}
echo kvadrat(5);
function zbroj($x,$y=0){  
    if(func_get_args()>2){
        
       return $x+$y;
        }
        else {
            return $x+$y;
        }
}
