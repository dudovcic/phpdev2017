<?php 

include "IAutomobil.php";
include	"Auto.class.php";

class Automobil extends Auto implements IAutomobil {

	var $model;

	function set_model($model) {
		$this->model = $model;
	}
	function get_model() {
		echo $this->model;
	}

}












