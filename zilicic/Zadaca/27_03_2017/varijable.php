<?php
 /*Kreirati varijable $a (int), $b (double). Izvršiti operacije +,-,*,/,% te rezulat spremiti u $c(double)*/
$a=100 ;
$b=45.86 ;
$num_zbroji= $a+$b;
$num_minus=$a-$b;
$num_mnozi=$a*$b;
$num_dijeljenje=$a/$b;
$num_ostatak=$a%$b ;
$c=array((double)$num_zbroji,$num_minus,$num_mnozi,$num_dijeljenje,$num_ostatak);

print_r($c);

echo '<hr>';
/* Kreirati indexirani array */

$indexarray=array(10,20,30,40,50,60,70);

/*Kreirati asocijativni array */
$asocarray=array('ime' => 'Zlatko' ,
                 'prezime' => 'Ilicic' ,
                 'adresa' => 'I.Tijardovica 3',
                  'grad' => 'Osijek');

/*Isprintati pojedine članove arraya */
print $indexarray[2];
echo '<pre>';
print 'Prezime :'.$asocarray['prezime'];
echo '<hr>';
/*Isprintati cijeli array */
print_r($indexarray);
echo '<pre>';
print_r($asocarray);
echo '<hr>';

/*Isprintati duljinu arraya (broj članova)*/
$brojclanova= count($indexarray);
echo $brojclanova;
echo'<pre>';
$brojclanova_2= count($asocarray);
echo $brojclanova_2;
echo '<hr>';
echo '<br>';

/*Napraviti dvije varijabla, ime i prezime. Pomoću točke "." ih spojiti npr: "Dobar dan Ivo jeli vaše prezima Anić"?*/
$ime="Zlatko";
$prezime="Iličić";
$upitna='Dobar dan '.$ime.' ,jeli vaše prezime '.$prezime.'?';
echo $upitna;
echo '<hr>';
echo '<br>';
/*Dohvatiti duljinu zadanog stringa */

echo  str_word_count($upitna);
echo '<hr>';
echo '<br>';

/* Nagradni zadatak: Unijeti 777 random string članova arraya, ispisati svaki 5-ti */
function counter(){
  $count= rand(1, 777);
  return $count++;
}
for ($i=1; $i<778; ++$i)
{
    $counter_chars=array(counter());
            /*$array= array(counter);*/
            print_r($counter_chars)   ;
}

/*----------------------------------------------------------------------*/
function rand_text(   $min = 10,
                      $max = 20,
                      $randtext = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890' )
{
      
    $varlen = rand($min,$max);
    $randtextlen = strlen($randtext);
    $text = '';

    for($i=0; $i < $varlen; $i++)
    {
        $text .= substr($randtext, rand(0, $randtextlen), 1);
        
    }
        return $text;
       
        }
         $counter_slova=array(rand_text());
   
    print_r($counter_slova);

/* 
 * To change tis license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
