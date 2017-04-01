<?php

// WHILE

$zbroj=0;
$i=1;

while($i<=1000){
    
    $zbroj+=$i;
    if($zbroj>=100000){
        break;
    }
    $i++;
    
}
echo $zbroj. "<br>";

echo "Stali smo kod broja " .$i;

echo "<br>";

echo "Stali smo kod broja " .($i-1). "<br>";

// DO

echo "<hr>";

$zbroj=0;
$i=1;

do{
    
    $zbroj+=$i;
    if($zbroj>=100000){
        break;
    }
    $i++;
    
}
while($i<=1000);

echo $zbroj. "<br>";

echo "Stali smo kod broja " .$i;

echo "<br>";

echo "DO-WHILE Stali smo kod broja " .($i-1). "<br>";

echo "<hr>";

// WHILE-CONTINUE

$x=0;
$y=0;

while($x<10){
    $x++;
    echo "x:$x ";
    while ($y<=10){
        echo "<br>y:$y";
        if($y==5){
            continue 2;
        }
        $y++;
    }
}

echo "<br> x je $x y je $y";
