<?php

abstract class PrevoznoSredstvo {
    public $volan="" ;
    public $tockovi="" ;
    public $kocnica="" ;

    public abstract function upali() ;
    public abstract function ugasi() ;
    public abstract function kreni() ;
    public abstract function stani() ;
    public abstract function vozi () ;

        }

class Automobil extends PrevoznoSredstvo {
    public function upali() {
        "Automobil je upaljen." ;
}
 public function ugasi() {
     "Automobil je ugasen." ;
 }
}


final class Volvo  extends Automobil {

}

$xc60=new Volvo() ;


?>
