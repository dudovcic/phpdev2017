<!Doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Vjezba citanja/pisanja u datoteci</title>
</head>
<body>
<?php

$filename='polaznici.txt';
$handle=fopen($filename,'r');
$contents=fread($handle,filesize($filename));
fclose($handle);
echo $contents;
echo '<hr>';
// verzija citanja red po red
$filename='polaznici.txt';
$datoteka=file($filename);
foreach($datoteka as $red_broj=>$red);
{
echo 'Redovi#<b>'.$red_broj.'</b> :'.$red."\n".'<br>';
print_r($datoteka);
}

echo '<hr>';
//kreira formu
echo 
'<form method="POST" action="">
<input type="TEXT" name="sadrzaj" value="">

<input type="SUBMIT" name="potvrdi" value="spremi">
</form>';
//upisivanje u datoteku
if(isset($_POST['potvrdi']))
{
$filename='polaznici.txt';
$handle=fopen($filename,'a');//upisuje na kraju datoteke
fwrite($handle,' '.$_POST["sadrzaj"]);
fclose($handle);
}
echo '<hr>';


// Ucitaj sadrzaj,uredi ga i spremi u istu datoteku

echo 
'<form method="POST" action="">

Tekst iz datoteke:
<br><textarea cols=10 rows=10 name="sadrzajdatoteka">';

$datoteka=file($filename);
foreach($datoteka as $red_broj=>$red);
{
echo $red;
}
echo '
		</textarea><br/>
		<input type="SUBMIT" name="promjeni" value="promjeni"/>
	

</form>';
if(isset($_POST['promjeni']))
{
$handle=fopen($filename,'a+');//upisuje na kraju datoteke
fwrite($handle,' '.$_POST["sadrzajdatoteka"]);
fclose($handle);
}
echo '<hr>';

?>




</body>


</html>


