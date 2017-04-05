<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProizvodFactory
 *
 * @author Korisnik
 */
include 'Proizvodi.class.php';
class ProizvodFactory {
    //put your code here

  public static function build($naziv, $vrsta)
  {
    $proizvodi = 'Proizvodi.class.php';
    if(class_exists($proizvodi))
    {
      return new $proizvodi($naziv,$vrsta);
    }
    else { 
      throw new Exception("Netocan naziv proizvoda.");
    }
  }
    
}
