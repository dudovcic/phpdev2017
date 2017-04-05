<?php 
include 'Proizvod.class.php';

class Proizvodi extends IProizvod{
	var $opis;
		public function _construct($opis){
		$this->opis=$opis;
		}
		public function get_opis() {
			return $this->opis;
		}


}



?>