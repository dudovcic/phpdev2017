<?php

// GLOBALNE VARIJABLE - Str 79.

$a = 2;

function inc_a()
{
    global $a;
    $a++;
    echo $a;
}

inc_a();
echo "<br/>";
echo $a;


// STATIČNE VARIJABLE

echo "<hr>";

/* Primjer 1

function inc_b()
{
    $b++;
    echo $b;
}
inc_b();
inc_b();
inc_b();

echo "<hr>";

 */

// Primjer 2

function inc_c()
{
    static $c = 0;
    $c++;
    echo $c;
}
inc_c();
inc_c();
inc_c();

// Global Value

echo "<hr>";

$d = 5; // Global Scope

function test()
{
    global $d;
    echo $d; // Reference to local scope variable
}

test();

// Global Value primjer 2

echo "<hr>";

$e = 1;
$f = 2;

function Sum()
{
    global $e, $f;

    $f = $e + $f;
} 

Sum();
echo $f;

