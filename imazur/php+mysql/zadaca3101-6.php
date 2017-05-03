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



?>
</body>
</html>

