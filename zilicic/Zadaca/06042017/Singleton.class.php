<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Singleton
 *
 * @author Korisnik
 */
class Singleton {
    private static $_instance;

    private function __construct() { }
    private final function __clone() { }

    public static function getInstance() {
        if(self::$_instance === null) {
            self::$_instance = new Singleton();
        }
        return self::$_instance;
    }
}
    //put your code here
