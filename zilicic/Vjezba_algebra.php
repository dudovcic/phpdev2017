<!Doctype html>
<meta content="text\html; charset=utf-8">
<html>
<head>
<Title>Vjezba za Algebru</Title></head>
<body>

<?php
echo 'Dobar dan! Moje ime je Ivan Ivic.'.'<br>';
$ime="Ivan";
$prezime="Ivic";
echo "Pomocu varijabli /".'<br>'.'Dobar dan ! Moje ime je '.$ime.' '.$prezime.'.';

echo '
<table border="1">
		<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		</tr>
<tr>
	<th></th>
		<th></th>
		<th></th>
		<th></th>
</tr>

</table> ';
echo '<hr>';
//---------------------------------------------------------------------
$prvi=1;
$drugi=2;
echo '$prvi='.$prvi;
echo '$drugi='.$drugi.'<br>';
$a=3;
$b=5;
$pom=$a;
$a=$b;
$b=$pom;
echo '$zadani a=3 a zadani $b=5'.','.'$a='.$a.'<br>';
echo 'zadani $a=3 a zadani $b=5'.','.'$b='.$b.'<br>';
$mojeime='Zlatko';
$mojeprezime='Ilicic';
echo $mojeime.' '.$mojeprezime;
echo '<hr>';
//-------------------------------------------------------------------
$mojeime='Zlatko';
$mojeprezime='Ilicic';
echo $mojeime.' '.$mojeprezime.'<br/>';
$a=5;
$a++;
echo $a.'<br/>';
 $a--;
echo $a.'<br/>';
$a=(float)5;
echo ($a).'<br/>';
$a+=$a;
echo $a.'<br/>';
$a=4;
$b=2;
echo $a+$b.'<br/>';
echo $a-$b.'<br/>';
echo $a*$b.'<br/>';
echo $a/$b.'<br/>';
echo $a%$b.'<br/>';
echo '<hr>';
//-----------------------------

$a=4;
$b=2;
if ($a>$b)
echo '$a je veci od $b'.'<br/>';
else
echo '$a je manji od $b'.'<br/>';

$a=12;
$b=22;
if ($a>$b)
$a++;
else
$b--;
echo $a.'<br/>';
echo $b.'<br/>';

$i=1;

while($i<=50)
{
echo $i.'<br/>';
$i++;
}
echo '<hr>';
$zbroj=0;
for ($i=20;$i<=30;$i++)
{		$zbroj+=$i;
}

echo $zbroj;
echo '<hr>';

//-------------------------------------------------------------
$imena=array("antun","zlatko","pavle","katarina","filip");
foreach ($imena as $ime)

echo $ime.'<br>';
echo '<hr>';
print_r($imena).'<br/>';
echo '<hr>';
$promjenikey=array();
	$promjenikey["ime5"]="filip";
	$promjenikey["ime4"]="zlatko";
	$promjenikey["ime3"]="pavle";
	$promjenikey["ime2"]="katarina";
	$promjenikey["ime1"]="filip";
		foreach($promjenikey as $key=>$ime)
		{
			echo $key.'=>'.$ime.'<br/>';	
										}
	echo '<hr>';
sort($imena);
for ($i=0;$i< count($imena);$i++)
	{
		echo $imena[$i].'<br/>';		
				}
echo '<hr>';
$imena2=array("antun","zlatko","pavle","katarina","filip");
ksort($imena2);
foreach($imena2 as $key=>$value)
	{
	echo $key.'=>'.$value.'<br/>';
	}
	echo  '<hr>';
	
	
	$polje=array();
	for ($i=1;$i<=100;$i++)
	{	$polje[]=$i;
			}
			print_r($polje);
	foreach($polje as $broj);
			{
				echo $broj.'<br/>';
			
				}
	echo '<hr>';
//---------------------------------------------------------------------------------
	
	
?>
</body>


</html>