<?php 

include("db_connection1.php");


if ( isset($_GET['id']) && $_GET['id'] == 1 ) {
	
	$template = "SELECT mbrStud, prezStud FROM stud WHERE imeStud=?";
	$ime = "Ivan";

	if ( $stmt = $mysqli->prepare($template) ) {
		$mbr = ""; $prezStud = "";
		$stmt->bind_param("s", $ime);
		$stmt->execute();
		$stmt->bind_result($mbr, $prezStud);
		while ( $stmt->fetch() ) {
			echo $mbr, " - " ,$prezStud."<br>";
		}
		$stmt->close();



	}
	$mysqli->close(); echo "<br><br><br>";



}





if ( isset($_GET['id']) && $_GET['id'] == 2 ) {
	



}






if ( isset($_GET['id']) && $_GET['id'] == 3 ) {
	


}






if ( isset($_GET['id']) && $_GET['id'] == 4 ) {
	


}





if ( isset($_GET['id']) && $_GET['id'] == 5 ) {
	


}






if ( isset($_GET['id']) && $_GET['id'] == 6 ) {
	


}




