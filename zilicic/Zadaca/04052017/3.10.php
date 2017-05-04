<?php
$mysqli=new mysqli('localhost','root','','fakultet');
mysqli_set_charset($mysqli,'utf8');
if(mysqli_connect_errno()){
echo "Pogreška kod spajanja";
echo mysqli_connect_error();
exit;
}
echo "Zadatak 3.10.1. ispiši prezimena i matične brojeve studenata čije ime je Ivan";
echo "<br/>";

 $query="SELECT * FROM stud WHERE imeStud='Ivan'";
if($result=$mysqli->query($query)){
while ($row=$result->fetch_assoc()) {
echo "Prezime: ".$row["prezStud"];
echo '<br/>';
echo "Matični broj: ".$row["mbrStud"];
echo '<br/>';
}
}
 echo "<hr>";
echo "Zadatak 3.10.2. Ispiši sve predmete";
echo "<br/>";
 $query="SELECT DISTINCT nazPred FROM pred ";
 if($stmt=$mysqli->prepare($query))
 $stmt->execute();
 $stmt->bind_result($col1);
 while ($stmt->fetch()){
 echo $col1;
 echo "<br/>";
 }
 echo "<hr>";
  echo "Zadatak 3.10.3. Ispiši sve studente, ime i prezime čije prezime počinje slovom B";
echo "<br/>";

$query=<<<END
        SELECT imeStud,prezStud FROM stud WHERE prezStud LIKE 'B%';
END;

  if($stmt=$mysqli->prepare($query)){
 $stmt->execute();
 
 $stmt->bind_result($col1,$col2);
 while($stmt->fetch())
     {
 
 echo $col1.' '.$col2;
 echo "<br/>";
 
 }
 }
 

