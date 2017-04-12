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
	echo $val . "\n".'<br>';
		}
 echo '<hr>';
               
//dodati još 5 studenata
array_push($studenti, "predrag","ivana","marko","ivona","danijel");//dodaje na kraju polja
print_r($studenti);
echo '<hr><br>';

//sortirati studente po imenu
asort($studenti);
print_r($studenti);
echo '<hr>';

//maknuti zadnja dva studenta

/*unset($studenti['deveti'],$studenti['deseti']); brise zadano a trebamo samo zadnje u polju */
array_pop($studenti);
array_pop($studenti);
print_r($studenti);
echo '<hr><br>';

//nad svakim studentom pozvati funkciju ucfirst() koja će postaviti prvo slovo veliko

foreach ($studenti as $key => $val)
{
echo ucfirst($val),'<br>';

	}
   echo '<hr>';
//napravite dva polja, u jedno stavite studente s parnim brojem u drugo neparni

$parni=array();
$neparni=array();

// Ovo je moj primjer
 # foreach($studenti as $val) 

   # if((strlen($val))%2==0) {
	/*print $val . "\n";*/
#	$parni=array("parni"=>$val);
#	print_r ($parni);echo'<br>';
#		}
		
#		else
#		{
#	$neparni=array("neparni"=>$val);
#		print_r ($neparni);echo'<br>';} 
	
	// Ovo je ispravan nacin
foreach ($studenti as $key =>$value){
		if (strlen($value)%2==0){
			$parni[$key]=$value;
			}
				else{
				$neparni[$key]=$value;
				}
		}
	print_r($parni);echo'<br>';
	print_r($neparni);echo'<br>';	
 echo '<hr><br>';

	//Unijeti polje sa 10 temperatura. Pronaći najmanju, najveću i srednju temperaturu

$temp=array(14,10,6,33,28,0,-2,13,7,37);

$min= min($temp);
$max= max($temp);

echo"Najmanja temperatura je :".$min;echo'</br>';
echo"Najveca temperatura je :".$max;echo'</br>';


// trazena je srednja temperatura, a u ovom slucaju prikazuje srednji element(midl) a to je peti(5) od deset (10)
#sort($temp);
#if(($s = sizeof($temp)) % 2 == 0) 
#{
#    echo "srednja vrijednost je: " . $temp[floor($s / 2)];
#}

// Ispravan nacin
$srednja=array_sum($temp) / count($temp);
echo "Srednja temperatura je :".$srednja;echo'</br';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

