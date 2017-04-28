<?php

include("db_connection.php");


$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('23000','Zadar',13)";
$result= mysqli_query($query);

$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('51000','Rijeka',8)";
$result= mysqli_query($query);

$query="BEGIN";
$result=mysqli_query($query);

$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('23000','Zadar',13)";
$result= mysqli_query($query);

$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('51000','Rijeka',8)";
$result= mysqli_query($query);

$query="COMMIT";
$result= mysqli_query($query);

$query="ROLLBACK";
$result= mysqli_query($query);

$error_num=0;

$query="BEGIN";
$result=mysqli_query($query);

$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('23000','Zadar',13)";
$result= mysqli_query($query);

if(!$result)
    $error_num++;

if($error_num<=0)
    $querry="COMMIT";
else 
 $query="ROLLBACK";
$result= mysqli_query($query);

if(!$result){}
else
    $error_num++;

if(!$result)
    $error_num++;


include("db_connection.php");

function begin()
{$query="BEGIN";
$result=mysqli_query($query);
    
}

function commit()
{$query="COMMIT";
$result= mysqli_query($query);
}

function rollback()
{$query="ROLLBACK";
$result= mysqli_query($query);
}

begin();

$error_num=0;

$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('23000','Zadar',13)";
$result= mysqli_query($query);

if(!$result)
    $error_num++;

$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('51000','Rijeka',8)";
$result= mysqli_query($query);

if(!$result)
    $error_num++;

$query="INSER INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES('10000','Zagreb',21)";
$result= mysqli_query($query);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

