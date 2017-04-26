<?php 

if ( isset($_GET['no']) && $_GET['no'] == 1 ) {

	$polje_brojeva = array();

	function show_polje() {

		$polje_brojeva[] = 11;
		$polje_brojeva[] = 100;
		$polje_brojeva[] = 111;

		print_r($polje_brojeva);
	}

	print_r($polje_brojeva);

	$polje_brojeva[] = 12;
	$polje_brojeva[] = 23;
	$polje_brojeva[] = 35;

	print_r($polje_brojeva);

	show_polje();

}

if ( isset($_GET['no']) && $_GET['no'] == 2 ) {

	$polje_brojeva = array();

	function show_polje() {

		global $polje_brojeva;
		
		$polje_brojeva[] = 11;
		$polje_brojeva[] = 100;
		$polje_brojeva[] = 111;

		print_r($polje_brojeva);
	}

	print_r($polje_brojeva);

	$polje_brojeva[] = 12;
	$polje_brojeva[] = 23;
	$polje_brojeva[] = 35;

	print_r($polje_brojeva);

	show_polje();

}




