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
	

	$template = "SELECT nazPred FROM pred ORDER BY nazPred ASC";


	if ( $stmt = $mysqli->prepare($template) ) {
		$pred  = "";
		// $stmt->bind_param("s", $ime);
		$stmt->execute();
		$stmt->bind_result($pred);
		while ( $stmt->fetch() ) {
			echo $pred ."<br>";
		}
		$stmt->close();



	}
	$mysqli->close(); echo "<br><br><br>";


}






if ( isset($_GET['id']) && $_GET['id'] == 3 ) {
	

	$template = "SELECT imeStud, prezStud FROM stud WHERE prezStud LIKE ?";
	$prez = "B%";


	if ( $stmt = $mysqli->prepare($template) ) {
		$ime  = ""; $prezStud = "";
		$stmt->bind_param("s", $prez);
		$stmt->execute();
		$stmt->bind_result($ime, $prez);
		while ( $stmt->fetch() ) {
			echo $ime, " ", $prez ."<br>";
		}
		$stmt->close();



	}
	$mysqli->close(); echo "<br><br><br>";


}






if ( isset($_GET['id']) && $_GET['id'] == 4 ) {
	
	$template = "SELECT nazPred FROM pred ORDER BY nazPred ASC";


	if ( $stmt = $mysqli->prepare($template) ) {
		$pred  = "";
		// $stmt->bind_param("s", $ime);
		$stmt->execute();
		$stmt->bind_result($pred);
		while ( $stmt->fetch() ) {
			echo $pred ."<br>";
		}
		$stmt->close();



	}
	$mysqli->close(); echo "<br><br><br>";

}





if ( isset($_GET['id']) && $_GET['id'] == 5 ) {
	


}






if ( isset($_GET['id']) && $_GET['id'] == 6 ) {
	


}




