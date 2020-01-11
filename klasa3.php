<?php
class Product{
public $title="" ;
public $price="" ;

public function __construct($title, $price) {
    $this->$title =$title ;
    $this->price=$price ;

}

public function getInfo() {
    return "Title: " . $this->title . ", price: " .$this->price ;
}
public function __destruct()
{
    echo "<hr>" ;
}
public function __toString() {
    return "Ovo je objekat <br>" ;
}
}

class Smartphone extends Product{
    public $serial= "" ;
    public function __construct($title, $price,$serial){
        parent::__construct($title, $price) ;
        $this->serial = $serial ;
    }

public function getInfo() {
    return "Title: " . $this->title . ", price: " .$this->price . " ,serial: ".$this->serial ;

}



}
    $xiaomi = new Smartphone ("Redmi Note S Plus", 400, "kjkjdfjdkfjddnnf") ;
    echo $xiaomi->getInfo()  ;

class Tablet extends Product {}
$samsung= new Tablet("Tab 4", 1000) ;
echo $samsung->getInfo() ;

class Tv extends Product{}
$sony= new Tv("Bravia", 1500) ;
echo $sony->getInfo() ;

?>