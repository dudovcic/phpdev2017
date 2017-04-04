<?php
function inc_a()
{ 
  static $a=0;
    $a++;
    echo $a;

}
inc_a();
inc_a();
inc_a();
echo "<hr>";

//zad 3 str 85
$a=2;
$b=2;
function zbroj()
{
    global $a;
    global $b;
    $z= ($a+$b);
    echo $z;
    
}
echo zbroj ();
echo "<hr>";
function razlika()
{
    static $a=2;
    static $b=2;
    $z= ($a-$b);
    echo $z;
    
}
echo razlika ();

echo "<hr>";
function umnozak(&$umn)
{
    $umn = $umn*$umn;
    
      
}
$v =2;
   
    umnozak ($v);
    echo $v;
    
echo "<hr>";
function kol($k, $l)
{
     return ($k/$l);
    
 
 }
 
    print_r (kol (2,2));
    echo "<hr>" ;
    
function funkcije ($a, $b){
    echo zbroj ($a, $b);
    echo razlika ($a, $b);
    echo umnozak ($a, $b);
    echo kol ($a, $b);
    
}
$e=9;
$r=3;

funkcije ($e, $r); 

echo "<hr>" ;
echo "<hr>" ;
echo "<hr>" ;

//zadaća

function zbr ($w, $q) {
return $w+$q;
}
$w=5;
$q=6;
echo zbr($w, $q);
echo "<hr>" ;



echo "<hr>" ;
function mno()
{
    static $f=4;
    static $g=5;
    $h= ($f*$g);
    echo $h;
    
}
echo mno ();

echo "<hr>";
$aa=30;
$bb=6;
function dij()
{
    global $aa;
    global $bb;
    $zz= ($aa/$bb);
    echo $zz;
    
}
echo dij ();
echo "<hr>";



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

