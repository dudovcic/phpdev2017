<?php 

include "Automobil.class.php";

$model1 = new Automobil();

$model1->set_model("Honda");
$model1->model = "Ne";
$model1->get_model();
echo "<br>";
$model1->vozi();

 ?>