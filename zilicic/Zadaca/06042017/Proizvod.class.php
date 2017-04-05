<?php 
include 'IProizvod.class.php';

class Proizvod implements IProizvod{
	var $opis;
	
	public function izgled(){
		echo "prosjecan" ;
	}
	public function kvaliteta() {
		echo "nije lose";
	}
	public function okus () {
		echo "moze i bolje";
		}
}
		
?>