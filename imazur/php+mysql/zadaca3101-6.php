<!DOCTYPE html>
<html>
<body> 
<?php
$mysqli= new mysqli('127.0.0.1','root','','fakultet');
mysqli_set_charset($mysqli,'utf8'); 
if(mysqli_connect_errno()){
	echo "Pogreška";
	echo mysqli_connect_error();
	exit;
}

//zadatak 3.10.1
$query1 = "SELECT stud.imeStud, stud.prezStud, stud.mbrStud FROM stud WHERE stud.imeStud LIKE 'Ivan'";
if($result=$mysqli->query($query1)){
	while ($row=$result->fetch_assoc()) {
		echo $row["imeStud"];
                echo " ";
                echo $row["prezStud"];
                echo " ";
                echo $row["mbrStud"];
		echo "<br/>";
	}
}
echo "<hr/>";



//zadatak 3.10.2
$query2 = "SELECT pred.nazPred FROM pred ORDER BY nazPred";
if($result1=$mysqli->query($query2)){
	while ($row1=$result1->fetch_assoc()) {
		echo $row1["nazPred"];
                echo "<br/>";
	}
}
echo "<hr/>";

$query21 = "SELECT pred.nazPred "
        . "FROM pred "
        . "ORDER BY nazPred"
        . " LIMIT 10";
$naziv="";
if($stmt=$mysqli->prepare($query21)){
$stmt->bind_param('s', $naziv);
	$stmt->execute();
	
	$stmt->bind_result($col1);
	while($stmt->fetch()){
		echo $col1;
		echo "<br/>";
	}
}
echo "<hr/>";

//zadatak 3.10.3
$query3="SELECT stud.imeStud, "
        . "stud.prezStud "
        . "FROM stud "
        . "WHERE stud.prezStud "
        . "LIKE ?";

$naziv3 = "B%";
if($stmt=$mysqli->prepare($query3)){
$stmt->bind_param('s', $naziv3);
	$stmt->execute();
	
	$stmt->bind_result($col3, $col33);
	while($stmt->fetch()){
		echo $col3;
                echo " ";
                echo $col33;
		echo "<br/>";
	}
}
echo "<hr/>";

//zadatak 3.10.4
$query4="SELECT stud.imeStud, "
        . "stud.prezStud "
        . "FROM stud "
        . "INNER JOIN mjesto "
        . "ON stud.pbrRod=mjesto.pbr "
        . "WHERE mjesto.nazMjesto "
        . "LIKE ?";
$naziv4 = 'Zagreb';

if($stmt=$mysqli->prepare($query4)){
$stmt->bind_param('s', $naziv4);
	$stmt->execute();
	
	$stmt->bind_result($col4, $col44);
	while($stmt->fetch()){
		echo $col4;
                echo " ";
                echo $col44;
		echo "<br/>";
	}
}




?>
</body>
</html>

