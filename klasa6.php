<?php

class Kalkulator {

    public $brojjedan ;
    public $brojdva;

    public function __construct($brojjedan,$brojdva) {
  
  $this->brojjedan=$brojjedan ;
   $this->brojdva=$brojdva ;
    }

public  function Saberi() {
 return $this->brojjedan + $this->brojdva ;
}
  
public function Oduzmi() {
    return $this->brojjedan - $this->brojdva ;
}
public function Pomnozi()
return $this->brojjedan * $this->brojdva ;

public function Podijeli()
return $this->brojjedan / $this->brojdva ;





}











?>
