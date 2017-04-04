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
include 'Auto.class.php';
include 'IAutomobil.class.php';

class Automobil extends Auto implements IAutomobil{
    //put your code here
    var $model;
    var $brojvrata=5;
    
    
    public function __construct($model) {
        $this->model=$model;
    }
    public function get_model() {
        return $this->model;
    }

    public function ispis() {
        printf("<br>Moj model je %s, imam %d kilovata i%d vrata, moja boja je %s "
                ,$this->get_model() // iz Automobil
                ,$this->kilovata    // iz auto
                ,$this->brojvrata   // iz automobil
                , $this->boja) ;     // iz auto
    }

}
