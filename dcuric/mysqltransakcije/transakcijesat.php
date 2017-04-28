<?php

include("../../dbconn.php");

function begin()
{
    $query="BEGIN";
    $result= mysqli_query($query);
            
}

function commit()
{
    $query="COMMIT";
    $result=mysqli_query($query);
    
}

function rollback()
{
    $query="ROLLBACK";
    $result=mysqli_query($query);
    
}

begin();

$error_num=0;

$query="INSERT INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES ('23000','Zadar','13')";
$result=mysqli_query($query);

if(!$result)
    $error_num++;

$query="INSERT INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES ('51000','Rijeka','8')";
$result=mysqli_query($query);

if(!$result)
    $error_num++;

$query="INSERT INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query="VALUES ('10000','Zagreb','21')";
$result=mysqli_query($query);

if(!$result)
    $error_num++;

if($error_num<=0)
    commit ();
else 
    rollback();
?>