<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Automobil
 *
 * @author pmrvic
 */
include 'IAutomobil.class.php';

class Automobil extends Auto implements IAutomobil{
    //put your code here
    var $model;
    public function __construct($model) {
        $this->model=$model;
    }
    public function get_model() {
        return $this->model;
    }

}
