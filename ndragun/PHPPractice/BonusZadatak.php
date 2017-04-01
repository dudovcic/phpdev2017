<?php

$a=5;
$b=6;

function zbroj($a, $b){
    return $a+$b;
}

function razlika($a, $b){
    return $a-$b;
}

function umnozak($a, $b){
    return $a*$b;
}


function dijeljenje($a, $b){
    return $a/$b;
}

function sve ($a,$b){
    echo zbroj($a, $b); 
    echo "<br>";
    echo razlika($a, $b);
    echo "<br>";
    echo umnozak($a, $b);
    echo "<br>";
    echo dijeljenje($a, $b);
}

echo sve($a, $b);

// Global

echo "<hr>";

function inc_a()
{
    global $a, $b;
    return $a+$b;
}

echo "<br/>";
echo inc_a();

function inc_b()
{
    global $a, $b;
    return $a-$b;
}

echo "<br/>";
echo inc_b();

function inc_d()
{
    global $a, $b;
    return $a*$b;
}

echo "<br/>";
echo inc_d();

function inc_e()
{
    global $a, $b;
    return $a/$b;
}

echo "<br/>";
echo inc_e();

// Static

echo "<hr>";

function test1()
{
    static $a = 5;
    static $b = 6;
    echo $a+$b;
    echo "<br>";
    echo $a-$b;
    echo "<br>";
    echo $a*$b;
    echo "<br>";
    echo $a/$b;

}

echo test1();

// Refenrence

echo "<hr>";


