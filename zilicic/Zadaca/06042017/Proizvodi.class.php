<?php 
include 'Proizvod.class.php';
include 'IProizvodi.class.php';

class Proizvodi extends Proizvod implements IProizvodi{
	var $naziv;
        var $vrsta='suhomesnato';
        
		public function _construct($naziv){
		$this->naziv=$naziv;
		}
                /*public function add($a,$b){
                    return $a+$b;
                }*/

                public function get_naziv() {
			return $this->naziv;
		}
                        public function ispis(){
                            /*printf(
                                    $this->get_naziv()
                                    ,$this->ambalaza
                                    , $this->tezina
                                    , $this->vrsta);*/
                                 printf($this->ambalaza
                                        ,$this->naziv
                                         ,$this->vrsta
                                         ,$this->proizvodac
                                         );
                        }              

}



?>