<!DOCTYPE html>
<html>

    
<?php


$a=30;
$b=6;
$d=25;
$e=15;


//predaja putem reference
function minus (&$d, &$e) {
    
    
    $c=$d-$e;
    echo $c;
    echo "<br>";
        
}
minus($d, $e);


//predaja putem vrijednosti
function zbroj ($a, $b) {
    
  $c= $a+$b;
  echo $c;
  echo "<br>";
  
}
zbroj(5,6);


//global
function kroz ($a, $b) {
    
    global $a;
    global $b;
    $c=$a/$b;
    echo $c;
    echo "<br>";
}
kroz($a,$b);





echo "<hr>";

//static
function puta () {
    
    $a=0;
    $b=4;
    static $a;
   $a++;
   $c=$a*$b;
   echo $c;
    
    echo "<br>";
}
puta();
puta();
puta();
puta();
puta();

echo "<hr>";

//čitanja i pisanja datoteka
$file='lista_ucenika.txt';

//čitanje sadržaja, 

$handle=fopen($file, 'r');
$contents=fread($handle, filesize($file));
fclose($handle);
echo $contents;
echo "<br>";
echo "<br>";
echo "<br>";

//čitanje u novim redovima pomoću foreach funkcije, može se primjeniti i na prvi zadatak iz knjige
$polje_ucenika=file($file);
foreach ($polje_ucenika as $abc=>$cba){
    
    echo 'linija #<b>'.$abc.'</b>:'.$cba.'<br>';
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";
echo "<br>";


//Funkcija za dopisivanje sadržaja koji neće overwritat prethodni sadržaj u fajlu, zakomentirao sam donji kod jer neželim da ispisuje Marijan po tekstu dok ne završi sa cijelom zadacom
//$handle2=fopen($file, 'a');
//fwrite($handle2, 'Marijan');
//fclose($handle2);


//forma za upis i prosljeđivanje teksta u fajl, 2. zadatak iz knjige
?>
<div style="border: solid black; padding:15px;">
    
<form method="POST">
    
    <p>Upisi neki tekst ovdje:</p>
    <input type="text" name="nekitekst">
    <input type="submit" name ="submit" value="Submit">

</form>

    

<?php


$novifajl='novifajl.txt';
if (isset($_POST['submit']))
    
{
    
    
$handle3=fopen($novifajl, 'a+');
fwrite($handle3, $_POST["nekitekst"]);
fclose($handle3);
    
    
}

$handle3=fopen($novifajl, 'r');
$ispis=fread($handle3, filesize($novifajl));
fclose($handle3);
echo $ispis;
?>
</div>
    
    <?php

echo "<br>";echo "<br>";
//korisnik mjenja sadržaj neke datoteke i sprema ga takvog izmjenjenog treći zadatak.
$file2="novifajl2.txt";
?>
    
    <div style="border: solid black; padding:15px;">
<form method="POST" action="">
    
    <textarea name="txt" rows="20" cols="40"> <?php $handle4=fopen($file2, 'r+');
    $nesta=fread($handle4, filesize($file2));
    fclose($handle4);
    echo $nesta;
    ?></textarea>
    <input type="submit" name="submit2" value ="Submit">

</form>
    
    <?php
    if (isset($_POST['submit2']))
        
    {
        $handle4=fopen($file2, 'w');
    fwrite($handle4,$_POST["txt"]);
    fclose($handle4);
    }
    
    
    echo "<br>";
    echo "<br>";
    ?>


</div>





</html>






