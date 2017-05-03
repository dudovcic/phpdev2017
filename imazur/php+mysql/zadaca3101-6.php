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
$query = "SELECT stud.imeStud, stud.prezStud, stud.mbrStud FROM stud WHERE stud.imeStud LIKE 'Ivan'";
if($result=$mysqli->query($query)){
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
$query1 = "SELECT pred.nazPred FROM pred ORDER BY nazPred";
if($result1=$mysqli->query($query1)){
	while ($row1=$result1->fetch_assoc()) {
		echo $row1["nazPred"];
                echo "<br/>";
	}
}
echo "<hr/>";
$query11 = "SELECT pred.nazPred "
        . "FROM pred "
        . "ORDER BY nazPred"
        . " LIMIT 10";
$naziv="";
if($stmt=$mysqli->prepare($query11)){
$stmt->bind_param('s', $naziv);
	$stmt->execute();
	
	$stmt->bind_result($col1);
	while($stmt->fetch()){
		echo $col1;
		echo "<br/>";
	}
}


?>
</body>
</html>

