<?php
// Unijeti polje s 10 studenata, sve malim slovima
$studenti=array('prvi'        =>'ivo',
                    'drugi'   =>'marija',
                    'treci'   =>'tvrtko',
                    'cetvrti' =>'pero',
                    'peti'    =>'tanja',
                    'sesti'   =>'goranka',
                    'sedmi'   =>'goran',
                    'osmi'    =>'petra',
                    'deveti'  =>'kresimir',
                    'deseti'  =>'mario');
                print_r($studenti);
               echo '<hr><br>';
               
//Pronaći sve studente čije ime je kraće od 5 znakova

foreach($studenti as $val) {
    if(strlen($val) < 5) 
	print $val . "\n";
}
 echo '<hr><br>';
               
//dodati još 5 studenata
array_unshift($studenti, "predrag","ivana","marko","ivona","danijel");
print_r($studenti);
echo '<hr><br>';

//sortirati studente po imenu
asort($studenti);
print_r($studenti);
echo '<hr><br>';

//maknuti zadnja dva studenta

unset($studenti['deveti'],$studenti['deseti']);
print_r($studenti);
echo '<hr><br>';

//nad svakim studentom pozvati funkciju ucfirst() koja će postaviti prvo slovo veliko

foreach ($studenti as $key => $val)
{
print_r(ucfirst($val));
echo '<br>';
}
   echo '<hr>';
//napravite dva polja, u jedno stavite studente s parnim brojem u drugo neparni

$parni=array("key" => "value");
$neparni=array("key" => "value");
print_r ($parni)."\n";
print_r ($neparni)."\n";
echo '<hr><br>';
foreach($studenti as $val) 

    if((strlen($val))%2===0) 
        {
	
	$parni=array("parni"=> $val);
	print_r ($parni);echo'<br>';
		}
		
		else
		{
	$neparni=array("neparni"=>$val);
		print_r ($neparni);echo'<br>';}

 echo '<hr><br>';

	//Unijeti polje sa 10 temperatura. Pronaći najmanju, najveću i srednju temperaturu

$temp=array(14,10,6,33,28,0,-2,13,7,37);

$min= min($temp);
$max= max($temp);

print_r($min);
echo '<br>';

print_r($max);
echo '<br>';

sort($temp);
if(($s = sizeof($temp)) % 2 == 0) 
{
     echo "srednja vrijednost je: " . $temp[floor($s / 2)];
}

echo '<br>';
echo '<br>';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

