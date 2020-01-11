<?php
 class MyClass {
public $prop1="I am property" ;
protected function getProperty() {
    return $this->prop1. "<br>" ;

}

 }

 class OtherClass extends MyClass {
     public static $someValue= "25" ;
     public function newMethod() {
         echo "I am new method from " .  __CLASS__ . "<br>" ;
     }
     public function getProtected() {
         return $this->getProperty() ;
     }

     public static function returnNumber() {
         return self::$someValue ;
     }
 }
 $newObject = new OtherClass ;
 echo $newObject->getProtected() ;
 echo OtherClass::returnNumber() ;
?>